<?php

/*
 * Copyright (C) 2014 Luna
 * Based on work by Adaur (2010), Vincent Garnier, Connorhd and David 'Chacmool' Djurback
 * Licensed under GPLv3 (http://modernbb.be/license.php)
 */

define('FORUM_ROOT', dirname(__FILE__).'/');
require FORUM_ROOT.'include/common.php';
require FORUM_ROOT.'include/inbox_functions.php';

// No guest here !
if ($luna_user['is_guest'])
	message($lang['No permission']);
	
// User enable PM ?
if (!$luna_user['use_pm'] == '1')
	message($lang['No permission']);

// Are we allowed to use this ?
if (!$luna_config['o_pms_enabled'] == '1' || $luna_user['g_pm'] == '0')
	message($lang['No permission']);

// Load the additionals language files
require FORUM_ROOT.'lang/'.$luna_user['language'].'/language.php';
require FORUM_ROOT.'lang/'.$luna_user['language'].'/pms.php';

$p_destinataire = '';
$p_contact = '';
$p_subject = '';
$p_message = '';

// Clean informations
$r = (isset($_REQUEST['reply']) ? intval($_REQUEST['reply']) : '0');
$q = (isset($_REQUEST['quote']) ? intval($_REQUEST['quote']) : '0');
$edit = isset($_REQUEST['edit']) ? intval($_REQUEST['edit']) : '0';
$tid = isset($_REQUEST['tid']) ? intval($_REQUEST['tid']) : '0';
$mid = isset($_REQUEST['mid']) ? intval($_REQUEST['mid']) : '0';

$errors = array();

if (!empty($r) && !isset($_POST['form_sent'])) // It's a reply
{
	// Make sure they got here from the site
	confirm_referrer(array('new_inbox.php', 'viewinbox.php'));
	
	$result = $db->query('SELECT DISTINCT owner, receiver FROM '.$db->prefix.'messages WHERE shared_id='.$r) or error('Unable to get the informations of the message', __FILE__, __LINE__, $db->error());
	
	if (!$db->num_rows($result))
		message($lang['Bad request']);
		
	$p_ids = array();
		
	while ($arry_dests = $db->fetch_assoc($result))
	{	
		if ($arry_dests['receiver'] == '0')
			message($lang['Bad request']);
			
		$p_ids[] = $arry_dests['owner'];
	}
	
	if (!in_array($luna_user['id'], $p_ids)) // Are we in the array? If not, we add ourselves
		$p_ids[] = $luna_user['id'];
	
	$p_ids = implode(', ', $p_ids);
	
	$result_subject = $db->query('SELECT subject FROM '.$db->prefix.'messages WHERE shared_id='.$r.' AND show_message=1') or error('Unable to fetch post info', __FILE__, __LINE__, $db->error());

	if (!$db->num_rows($result_subject))
		message($lang['Bad request']);

	$p_subject = $db->result($result_subject);
	
	$result_username = $db->query('SELECT username FROM '.$db->prefix.'users WHERE id IN ('.$p_ids.')') or error('Unable to find the owners of the message', __FILE__, __LINE__, $db->error());
	
	if (!$db->num_rows($result_username))
		message($lang['Bad request']);
		
	$p_destinataire = array();
	
	while ($username_result = $db->fetch_assoc($result_username))
	{
		$p_destinataire[] = $username_result['username'];
	}
	
	$p_destinataire = implode(', ', $p_destinataire);
	
	if (!empty($q) && $q > '0') // It's a reply with a quote
	{
		// Get message info
		$result = $db->query('SELECT sender, message FROM '.$db->prefix.'messages WHERE id='.$q.' AND owner='.$luna_user['id']) or error('Unable to find the informations of the message', __FILE__, __LINE__, $db->error());
			
		if (!$db->num_rows($result))
			message($lang['Bad request']);
			
		$re_message = $db->fetch_assoc($result);
		
		// Quote the message
		$p_message = '[quote='.$re_message['sender'].']'.$re_message['message'].'[/quote]';
	}
}
if (!empty($edit) && !isset($_POST['form_sent'])) // It's an edit
{
	// Make sure they got here from the site
	confirm_referrer(array('new_inbox.php', 'viewinbox.php'));
	
	// Check that $edit looks good
	if ($edit <= 0)
		message($lang['Bad request']);
	
	$result = $db->query('SELECT sender_id, message, receiver FROM '.$db->prefix.'messages WHERE id='.$edit) or error('Unable to get the informations of the message', __FILE__, __LINE__, $db->error());
	
	if (!$db->num_rows($result))
		message($lang['Bad request']);
		
	$edit_msg = $db->fetch_assoc($result);
	
	// If you're not the owner of this message, why do you want to edit it?
	if ($edit_msg['sender_id'] != $luna_user['id'] && !$luna_user['is_admmod'] || $edit_msg['receiver'] == '0' && !$luna_user['is_admmod'])
		message($lang['No permission']);

	// Insert the message
	$p_message = censor_words($edit_msg['message']);
}
if (isset($_POST['form_sent'])) // The post button has been pressed
{
	// Make sure they got here from the site
	confirm_referrer(array('new_inbox.php', 'viewinbox.php'));
	
	$hide_smilies = isset($_POST['hide_smilies']) ? '1' : '0';
	
	// Make sure form_user is correct
	if ($_POST['form_user'] != $luna_user['username'])
		message($lang['Bad request']);
	
	// Flood protection by Newman
	if (!isset($_SESSION))
		session_start();

	if(!$edit && !isset($_POST['preview']) && $_SESSION['last_session_request'] > time() - $luna_user['g_post_flood'])
		$errors[] = sprintf( $lang_pms['Flood'], $luna_user['g_post_flood'] );
		
	// Check users boxes
	if ($luna_user['g_pm_limit'] != '0' && !$luna_user['is_admmod'] && $luna_user['num_pms'] >= $luna_user['g_pm_limit'])
		$errors[] = $lang_pms['Sender full'];
	
	// Build receivers list
	$p_destinataire = isset($_POST['p_username']) ? luna_trim($_POST['p_username']) : '';
	$p_contact = isset($_POST['p_contact']) ? luna_trim($_POST['p_contact']) : '';
	$dest_list = explode(', ', $p_destinataire);
	
	if (!in_array($luna_user['username'], $dest_list))
		$dest_list[] = $luna_user['username'];
	
	if ($p_contact != '0')
		$dest_list[] = $p_contact;
	
	$dest_list = array_map('luna_trim', $dest_list);
	$dest_list = array_unique($dest_list);
	
	foreach ($dest_list as $k=>$v)
	{
		if ($v == '') unset($dest_list[$k]);
	}

	 if (count($dest_list) < '1' && $edit == '0')
		$errors[] = $lang_pms['Must receiver'];
    	elseif (count($dest_list) > $luna_config['o_pms_max_receiver'])
		$errors[] = sprintf($lang_pms['Too many receiver'], $luna_config['o_pms_max_receiver']-1);

	$destinataires = array(); $i = '0';
	$list_ids = array();
	$list_usernames = array();
	foreach ($dest_list as $destinataire)
	{
		// Get receiver infos
		$result_username = $db->query("SELECT u.id, u.username, u.email, u.notify_pm, u.notify_pm_full, u.use_pm, u.num_pms, g.g_id, g.g_pm_limit, g.g_pm, c.allow_msg FROM ".$db->prefix."users AS u INNER JOIN ".$db->prefix."groups AS g ON (u.group_id=g.g_id) LEFT JOIN ".$db->prefix."messages AS pm ON (pm.owner=u.id) LEFT JOIN ".$db->prefix."contacts AS c ON (c.user_id=u.id AND c.contact_id='".$luna_user['id']."') WHERE u.id!=1 AND u.username='".$db->escape($destinataire)."' GROUP BY u.username, u.id, g.g_id, c.allow_msg") or error("Unable to get user ID", __FILE__, __LINE__, $db->error());
		// List users infos
		if ($destinataires[$i] = $db->fetch_assoc($result_username))
		{
			// Begin to build the IDs' list - Thanks to Yacodo!
			$list_ids[] = $destinataires[$i]['id'];
			// Did the user left?
			if (!empty($r))
			{
				$result = $db->query('SELECT 1 FROM '.$db->prefix.'messages WHERE shared_id='.$r.' AND show_message=1 AND owner='.$destinataires[$i]['id']) or error('Unable to get the informations of the message', __FILE__, __LINE__, $db->error());
				if (!$db->num_rows($result))
					$errors[] = sprintf($lang_pms['User left'], luna_htmlspecialchars($destinataire));
			}
			// Begin to build usernames' list
			$list_usernames[] = $destinataires[$i]['username'];
			// Receivers enable PM ?
			if (!$destinataires[$i]['use_pm'] == '1' || !$destinataires[$i]['g_pm'] == '1')
				$errors[] = sprintf($lang_pms['User disable PM'], luna_htmlspecialchars($destinataire));			
			// Check receivers boxes
			elseif ($destinataires[$i]['g_id'] > FORUM_GUEST && $destinataires[$i]['g_pm_limit'] != '0' && $destinataires[$i]['num_pms'] >= $destinataires[$i]['g_pm_limit'])
				$errors[] = sprintf($lang_pms['Dest full'], luna_htmlspecialchars($destinataire));	
			// Are we authorized?
			elseif (!$luna_user['is_admmod'] && $destinataires[$i]['allow_msg'] == '0')
				$errors[] = sprintf($lang_pms['User blocked'], luna_htmlspecialchars($destinataire));
		}
		else
			$errors[] = sprintf($lang_pms['No user'], luna_htmlspecialchars($destinataire));
		$i++;
	}
	// Build IDs' & usernames' list : the end
	$ids_list = implode(', ', $list_ids);
	$usernames_list = implode(', ', $list_usernames);
	
	// Check subject
	$p_subject = luna_trim($_POST['req_subject']);
	
	if ($p_subject == '' && $edit == '0')
		$errors[] = $lang['No subject'];
	elseif (luna_strlen($p_subject) > '70')
		$errors[] = $lang['Too long subject'];
	elseif ($luna_config['p_subject_all_caps'] == '0' && strtoupper($p_subject) == $p_subject && $luna_user['is_admmod'])
		$p_subject = ucwords(strtolower($p_subject));

	// Clean up message from POST
	$p_message = luna_linebreaks(luna_trim($_POST['req_message']));

	// Check message
	if ($p_message == '')
		$errors[] = $lang['No message'];

	// Here we use strlen() not luna_strlen() as we want to limit the post to FORUM_MAX_POSTSIZE bytes, not characters
	else if (strlen($p_message) > FORUM_MAX_POSTSIZE)
		$errors[] = sprintf($lang['Too long message'], forum_number_format(FORUM_MAX_POSTSIZE));
	else if ($luna_config['p_message_all_caps'] == '0' && strtoupper($p_message) == $p_message && $luna_user['is_admmod'])
		$p_message = ucwords(strtolower($p_message));

	// Validate BBCode syntax
	if ($luna_config['p_message_bbcode'] == '1')
	{
		require FORUM_ROOT.'include/parser.php';
		$p_message = preparse_bbcode($p_message, $errors);
	}	
	// Send message(s)	
	if (empty($errors) && !isset($_POST['preview']))
	{
		$_SESSION['last_session_request'] = $now = time();
		
		if ($luna_config['o_pms_notification'] == '1')
		{
			require_once FORUM_ROOT.'include/email.php';
			
			// Load the "new_pm" template
			if (file_exists(FORUM_ROOT.'lang/'.$luna_user['language'].'/mail_templates/new_pm.tpl'))
				$mail_tpl = trim(file_get_contents(FORUM_ROOT.'lang/'.$luna_user['language'].'/mail_templates/new_pm.tpl'));
			else
				$mail_tpl = trim(file_get_contents(FORUM_ROOT.'lang/English/mail_templates/new_pm.tpl'));
				
			// Load the "new_pm_full" template
			if (file_exists(FORUM_ROOT.'lang/'.$luna_user['language'].'/mail_templates/new_pm_full.tpl'))
				$mail_tpl_full = trim(file_get_contents(FORUM_ROOT.'lang/'.$luna_user['language'].'/mail_templates/new_pm_full.tpl'));
			else
				$mail_tpl_full = trim(file_get_contents(FORUM_ROOT.'lang/English/mail_templates/new_pm_full.tpl'));
			
			// The first row contains the subject
			$first_crlf = strpos($mail_tpl, "\n");
			$mail_subject = trim(substr($mail_tpl, 8, $first_crlf-8));
			$mail_message = trim(substr($mail_tpl, $first_crlf));
	
			$mail_subject = str_replace('<board_title>', $luna_config['o_board_title'], $mail_subject);
			$mail_message = str_replace('<sender>', $luna_user['username'], $mail_message);
			$mail_message = str_replace('<board_mailer>', sprintf($lang['Mailer'], $luna_config['o_board_title']), $mail_message);
			
			// The first row contains the subject
			$first_crlf_full = strpos($mail_tpl_full, "\n");
			$mail_subject_full = trim(substr($mail_tpl_full, 8, $first_crlf_full-8));
			$mail_message_full = trim(substr($mail_tpl_full, $first_crlf_full));
			
			$cleaned_message = bbcode2email($p_message, -1);
	
			$mail_subject_full = str_replace('<board_title>', $luna_config['o_board_title'], $mail_subject_full);
			$mail_message_full = str_replace('<sender>', $luna_user['username'], $mail_message_full);
			$mail_message_full = str_replace('<message>', $cleaned_message, $mail_message_full);
			$mail_message_full = str_replace('<board_mailer>', sprintf($lang['Mailer'], $luna_config['o_board_title']), $mail_message_full);
		}
		if (empty($r) && empty($edit)) // It's a new message
		{
			$result_shared = $db->query('SELECT last_shared_id FROM '.$db->prefix.'messages ORDER BY last_shared_id DESC LIMIT 1') or error('Unable to fetch last_shared_id', __FILE__, __LINE__, $db->error());
			if (!$db->num_rows($result_shared))
				$shared_id = '1';
			else
			{
				$shared_result = $db->result($result_shared);
				$shared_id = $shared_result + '1';
			}
				
			foreach ($destinataires as $dest)
			{
				$val_showed = '0';
				
				if ($dest['id'] == $luna_user['id'])
					$val_showed = '1';
				else
					$val_showed = '0';
					
				$db->query('INSERT INTO '.$db->prefix.'messages (shared_id, last_shared_id, owner, subject, message, sender, receiver, sender_id, receiver_id, sender_ip, hide_smilies, posted, show_message, showed) VALUES(\''.$shared_id.'\', \''.$shared_id.'\', \''.$dest['id'].'\', \''.$db->escape($p_subject).'\', \''.$db->escape($p_message).'\', \''.$db->escape($luna_user['username']).'\', \''.$db->escape($usernames_list).'\', \''.$luna_user['id'].'\', \''.$db->escape($ids_list).'\', \''.get_remote_address().'\', \''.$hide_smilies.'\',  \''.$now.'\', \'1\', \''.$val_showed.'\')') or error('Unable to send the message.', __FILE__, __LINE__, $db->error());
				$new_mp = $db->insert_id();
				$db->query('UPDATE '.$db->prefix.'messages SET last_post_id='.$new_mp.', last_post='.$now.', last_poster=\''.$db->escape($luna_user['username']).'\' WHERE shared_id='.$shared_id.' AND show_message=1 AND owner='.$dest['id']) or error('Unable to update the message.', __FILE__, __LINE__, $db->error());
				$db->query('UPDATE '.$db->prefix.'users SET num_pms=num_pms+1 WHERE id='.$dest['id']) or error('Unable to update user', __FILE__, __LINE__, $db->error());
				// E-mail notification
				if ($luna_config['o_pms_notification'] == '1' && $dest['notify_pm'] == '1' && $dest['id'] != $luna_user['id'])
				{
					$mail_message = str_replace('<pm_url>', $luna_config['o_base_url'].'/viewinbox.php?tid='.$shared_id.'&mid='.$new_mp.'&box=inbox', $mail_message);
					$mail_message_full = str_replace('<pm_url>', $luna_config['o_base_url'].'/viewinbox.php?tid='.$shared_id.'&mid='.$new_mp.'&box=inbox', $mail_message_full);
					
					if ($dest['notify_pm_full'] == '1')
						luna_mail($dest['email'], $mail_subject_full, $mail_message_full);
					else
						luna_mail($dest['email'], $mail_subject, $mail_message);
				}
			}
			$db->query('UPDATE '.$db->prefix.'users SET last_post='.$now.' WHERE id='.$luna_user['id']) or error('Unable to update user', __FILE__, __LINE__, $db->error());
		}
		if (!empty($r)) // It's a reply or a reply with a quote
		{
			// Check that $edit looks good
			if ($r <= '0')
				message($lang['Bad request']);
				
			foreach ($destinataires as $dest)
			{
			
				$val_showed = '0';
				
				if ($dest['id'] == $luna_user['id'])
					$val_showed = '1';
				else
					$val_showed = '0';
					
					$db->query('INSERT INTO '.$db->prefix.'messages (shared_id, owner, subject, message, sender, receiver, sender_id, receiver_id, sender_ip, hide_smilies, posted, show_message, showed) VALUES(\''.$r.'\', \''.$dest['id'].'\', \''.$db->escape($p_subject).'\', \''.$db->escape($p_message).'\', \''.$db->escape($luna_user['username']).'\', \''.$db->escape($usernames_list).'\', \''.$luna_user['id'].'\', \''.$db->escape($ids_list).'\', \''.get_remote_address().'\', \''.$hide_smilies.'\', \''.$now.'\', \'0\', \''.$val_showed.'\')') or error('Unable to send the message.', __FILE__, __LINE__, $db->error());
					$new_mp = $db->insert_id();
					$db->query('UPDATE '.$db->prefix.'messages SET last_post_id='.$new_mp.', last_post='.$now.', last_poster=\''.$db->escape($luna_user['username']).'\' WHERE shared_id='.$r.' AND show_message=1 AND owner='.$dest['id']) or error('Unable to update the message.', __FILE__, __LINE__, $db->error());
					if ($dest['id'] != $luna_user['id'])
					{
						$db->query('UPDATE '.$db->prefix.'messages SET showed = 0 WHERE shared_id='.$r.' AND show_message=1 AND owner='.$dest['id']) or error('Unable to update the message.', __FILE__, __LINE__, $db->error());
					}
					// E-mail notification
					if ($luna_config['o_pms_notification'] == '1' && $dest['notify_pm'] == '1' && $dest['id'] != $luna_user['id'])
					{
						$mail_message = str_replace('<pm_url>', $luna_config['o_base_url'].'/viewinbox.php?tid='.$r.'&mid='.$new_mp.'&box=inbox', $mail_message);
						$mail_message_full = str_replace('<pm_url>', $luna_config['o_base_url'].'/viewinbox.php?tid='.$r.'&mid='.$new_mp.'&box=inbox', $mail_message_full);
						
						if ($dest['notify_pm_full'] == '1')
							luna_mail($dest['email'], $mail_subject_full, $mail_message_full);
						else
							luna_mail($dest['email'], $mail_subject, $mail_message);
					}
			}
			$db->query('UPDATE '.$db->prefix.'users SET last_post='.$now.' WHERE id='.$luna_user['id']) or error('Unable to update user', __FILE__, __LINE__, $db->error());
		}
		if (!empty($edit) && !empty($tid)) // It's an edit
		{
			// Check that $edit looks good
			if ($edit <= '0')
				message($lang['Bad request']);
			
			$result = $db->query('SELECT shared_id, owner, message FROM '.$db->prefix.'messages WHERE id='.$edit) or error('Unable to get the informations of the message', __FILE__, __LINE__, $db->error());
			
			if (!$db->num_rows($result))
				message($lang['Bad request']);
				
			while($edit_msg = $db->fetch_assoc($result))
			{
				// If you're not the owner of this message, why do you want to edit it?
				if ($edit_msg['owner'] != $luna_user['id'] && !$luna_user['is_admmod'])
					message($lang['No permission']);
					
				$message = $edit_msg['message'];
				$shared_id_msg = $edit_msg['shared_id'];
			}
			
			$result_msg = $db->query('SELECT id FROM '.$db->prefix.'messages WHERE message=\''.$db->escape($message).'\' AND shared_id='.$shared_id_msg) or error('Unable to get the informations of the message', __FILE__, __LINE__, $db->error());
			
			if (!$db->num_rows($result_msg))
				message($lang['Bad request']);
				
			while($list_ids = $db->fetch_assoc($result_msg))
			{		
				$ids_edit[] = $list_ids['id'];
			}
			
			$ids_edit = implode(',', $ids_edit);
				
			// Finally, edit the message - maybe this query is unsafe?
			$db->query('UPDATE '.$db->prefix.'messages SET message=\''.$db->escape($p_message).'\' WHERE message=\''.$db->escape($message).'\' AND id IN ('.$ids_edit.')') or error('Unable to edit the message', __FILE__, __LINE__, $db->error());
		}
			redirect('inbox.php', $lang_pms['Sent redirect']);
	}
}
else
{
	// To user(s)
	if (isset($_GET['uid']))
	{
		$users_id = explode('-', $_GET['uid']);
		$users_id = array_map('intval', $users_id);
		foreach ($users_id as $k=>$v)
			if ($v <= 0) unset($users_id[$k]);
		
		$arry_dests = array();
		foreach ($users_id as $user_id)
		{
			$result = $db->query('SELECT username FROM '.$db->prefix.'users WHERE id='.$user_id) or error('Unable to find the informations of the message', __FILE__, __LINE__, $db->error());
			
			if (!$db->num_rows($result))
				message($lang['Bad request']);
			
			$arry_dests[] = $db->result($result);
		}
			
		$p_destinataire = implode(', ', $arry_dests);
	}
	// From a list
	if (isset($_GET['lid']))
	{
		$id = intval($_GET['lid']);
		
		$arry_dests = array();
		$result = $db->query('SELECT receivers FROM '.$db->prefix.'sending_lists WHERE user_id='.$luna_user['id'].' AND id='.$id) or error('Unable to find the informations of the message', __FILE__, __LINE__, $db->error());
		
		if (!$db->num_rows($result))
			message($lang['Bad request']);
		
		$arry_dests = unserialize($db->result($result));
			
		$p_destinataire = implode(', ', $arry_dests);
	}
}

$page_title = array(luna_htmlspecialchars($luna_config['o_board_title']), $lang_pms['Private Messages'], $lang_pms['Send a message']);

$required_fields = array('req_message' => $lang['Message']);
$focus_element = array('post');

if ($r == '0' && $q == '0' && $edit == '0')
{
	$required_fields['req_subject'] = $lang['Subject'];
	$focus_element[] = 'p_username';
}
else
	$focus_element[] = 'req_message';

$page_head['jquery'] = '<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>';
$page_head['script'] = '<script type="text/javascript" src="include/pms.js"></script>';

define('FORUM_ACTIVE_PAGE', 'pm');
require load_page('header.php');

load_inbox_nav('send');
?>
<?php
// If there are errors, we display them
if (!empty($errors)) {
?>
<div class="panel panel-danger">
	<div class="panel-heading">
		<h3 class="panel-title">Post errors</h3>
	</div>
	<div class="panel-body">
		<p><?php echo $lang['Post errors info'] ?></p>
			<ul>
<?php
	foreach ($errors as $cur_error)
		echo "\t\t\t\t".'<li><strong>'.$cur_error.'</strong></li>'."\n";
?>
			</ul>
	</div>
</div>
<?php

} else if (isset($_POST['preview'])) {
	require_once FORUM_ROOT.'include/parser.php';
	$preview_message = parse_message($p_message);

?>
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Post preview</h3>
	</div>
	<div class="panel-body">
		<p><?php echo $preview_message."\n" ?></p>
	</div>
</div>
<?php

}

$cur_index = 1;

?>
<form class="form-horizontal" method="post" id="post" action="new_inbox.php" onsubmit="return process_form(this)">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Write message</h3>
		</div>
		<div class="panel-body">
			<fieldset>
				<input type="hidden" name="form_sent" value="1" />
				<input type="hidden" name="form_user" value="<?php echo luna_htmlspecialchars($luna_user['username']) ?>" />
				<?php echo (($r != '0') ? '<input type="hidden" name="reply" value="'.$r.'" />' : '') ?>
				<?php echo (($edit != '0') ? '<input type="hidden" name="edit" value="'.$edit.'" />' : '') ?>
				<?php echo (($q != '0') ? '<input type="hidden" name="quote" value="1" />' : '') ?>
				<?php echo (($tid != '0') ? '<input type="hidden" name="tid" value="'.$tid.'" />' : '') ?>
				<?php if ($r == '0' && $q == '0' && $edit == '0') : ?>
					<?php
					$result = $db->query('SELECT * FROM '.$db->prefix.'sending_lists WHERE user_id='.$luna_user['id'].' ORDER BY id DESC') or error('Unable to update the list of the contacts', __FILE__, __LINE__, $db->error());
	
					if ($db->num_rows($result)) {
					?>
					<div class="form-group">
						<label class="col-sm-3 control-label"><?php echo $lang_pms['Sending lists'] ?></label>
						<div class="col-sm-9">
							<select class="form-control" id="sending_list" name="sending_list">
								<option value="" selected><?php echo $lang_pms['Select a list'] ?></option>
								<?php
								while ($cur_list = $db->fetch_assoc($result)) {
									$usernames = '';
									$ids_list = unserialize($cur_list['array_id']);
									$usernames_list = unserialize($cur_list['receivers']);
									for($i = 0; $i < count($ids_list); $i++) {
										if ($i > 0 && $i < count($ids_list))
												$usernames = $usernames.', ';
										
										$usernames = $usernames.luna_htmlspecialchars($usernames_list[$i]);
									} 
									echo '<option value="'.$usernames.'">'.luna_htmlspecialchars($cur_list['name']).'</option>';
								}
								?>
							</select>
						</div>
						<noscript><p><?php echo $lang_pms['JS required'] ?></p></noscript>	
					</div>
					<?php } ?>
				<?php else : ?>
				<input type="hidden" name="p_username" value="<?php echo luna_htmlspecialchars($p_destinataire) ?>" />
				<input type="hidden" name="req_subject" value="<?php echo luna_htmlspecialchars($p_subject) ?>" />
				<?php endif; ?>
				<div class="form-group">
					<label class="col-sm-3 control-label"><?php echo $lang_pms['Send to'] ?><span class="help-block">Separate names with commas, maximum <?php echo ($luna_config['o_pms_max_receiver']-1) ?> names</span></label>
					<div class="col-sm-9">
						<input class="form-control" type="text" name="p_username" id="p_username" size="30" value="<?php echo luna_htmlspecialchars($p_destinataire) ?>" tabindex="<?php echo $cur_index++ ?>" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label"><?php echo $lang['Subject'] ?></label>
					<div class="col-sm-9">
						<input class="form-control" type="text" name="req_subject" value="<?php echo ($p_subject != '' ? luna_htmlspecialchars($p_subject) : ''); ?>" tabindex="<?php echo $cur_index++ ?>" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label"><?php echo $lang['Message'] ?></label>
					<div class="col-sm-9">
						<textarea class="form-control" name="req_message" rows="10" tabindex="<?php echo $cur_index++ ?>"><?php echo ($p_message != '' ? luna_htmlspecialchars($p_message) : ''); ?></textarea>
					</div>
				</div>
			</fieldset>
		</div>
		<div class="panel-footer">
			<input class="btn btn-primary" type="submit" name="submit" value="<?php echo $lang['Submit'] ?>" tabindex="<?php echo $cur_index++ ?>" accesskey="s" /> <input class="btn btn-default" type="submit" name="preview" value="<?php echo $lang['Preview'] ?>" tabindex="<?php echo $cur_index++ ?>" accesskey="p" />
		</div>
	</div>
</form>
<?php
	require load_page('footer.php');
?>