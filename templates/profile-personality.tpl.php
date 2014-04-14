<?php

// Make sure there's no direct access to this template.
if (!defined('FORUM_ROOT'))
	exit('The constant FORUM_ROOT must be defined and point to a valid ModernBB installation root directory.');

?>

<div class="col-sm-3 profile-nav">
<?php
	generate_profile_menu('personality');
?>
</div>
<div class="col-sm-9 col-profile">
<h2 class="profile-h2"><?php echo $lang['Section personality'] ?></h2>
<form id="profile2" class="form-horizontal" method="post" action="profile.php?section=personality&amp;id=<?php echo $id ?>">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"><?php echo $lang['Personal details legend'] ?><span class="pull-right"><input class="btn btn-primary" type="submit" name="update" value="<?php echo $lang['Submit'] ?>" /></span></h3>
		</div>
		<div class="panel-body">
			<fieldset>
				<input type="hidden" name="form_sent" value="1" />
				<?php echo $username_field ?>
				<?php if ($luna_user['id'] == $id || $luna_user['g_id'] == FORUM_ADMIN || ($user['g_moderator'] == '0' && $luna_user['g_mod_change_passwords'] == '1')): ?>
				<div class="form-group">
					<label class="col-sm-3 control-label"><?php echo $lang['Password'] ?></label>
					<div class="col-sm-9">
						<a class="btn btn-primary" href="profile.php?action=change_pass&amp;id=<?php echo $id ?>"><?php echo $lang['Change pass'] ?></a>
					</div>
				</div>
				<?php endif; ?>
				<?php echo $email_field ?>
				<hr />
				<input type="hidden" name="form_sent" value="1" />
				<div class="form-group">
					<label class="col-sm-3 control-label"><?php echo $lang['Realname'] ?></label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="form[realname]" value="<?php echo luna_htmlspecialchars($user['realname']) ?>" maxlength="40" />
					</div>
				</div>
				<?php if (isset($title_field)): ?>
					<?php echo $title_field ?>
				<?php endif; ?>
				<div class="form-group">
					<label class="col-sm-3 control-label"><?php echo $lang['Location'] ?></label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="form[location]" value="<?php echo luna_htmlspecialchars($user['location']) ?>" maxlength="30" />
					</div>
				</div>
				<hr />
				<div class="form-group">
					<label class="col-sm-3 control-label"><?php echo $lang['Website'] ?></label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="form[url]" value="<?php echo luna_htmlspecialchars($user['url']) ?>" maxlength="80" />
					</div>
				</div>
				<hr />
				<div class="form-group">
					<label class="col-sm-3 control-label"><?php echo $lang['Jabber'] ?></label>
					<div class="col-sm-9">
						<input id="jabber" type="text" class="form-control" name="form[jabber]" value="<?php echo luna_htmlspecialchars($user['jabber']) ?>" maxlength="75" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label"><?php echo $lang['ICQ'] ?></label>
					<div class="col-sm-9">
						<input id="icq" type="text" class="form-control" name="form[icq]" value="<?php echo $user['icq'] ?>" maxlength="12" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label"><?php echo $lang['MSN'] ?></label>
					<div class="col-sm-9">
						<input id="msn" type="text" class="form-control" name="form[msn]" value="<?php echo luna_htmlspecialchars($user['msn']) ?>" maxlength="50" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label"><?php echo $lang['AOL IM'] ?></label>
					<div class="col-sm-9">
						<input id="aim" type="text" class="form-control" name="form[aim]" value="<?php echo luna_htmlspecialchars($user['aim']) ?>" maxlength="30" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label"><?php echo $lang['Yahoo'] ?></label>
					<div class="col-sm-9">
						<input id="yahoo" type="text" class="form-control" name="form[yahoo]" value="<?php echo luna_htmlspecialchars($user['yahoo']) ?>" maxlength="30" />
					</div>
				</div>
			</fieldset>
		</div>
	</div>
<?php if ($luna_config['o_avatars'] == '1'): ?>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"><?php echo $lang['Avatar legend'] ?></h3>
		</div>
		<div class="panel-body">
			<fieldset id="profileavatar">
<?php if ($user_avatar): ?>
				<div class="useravatar"><?php echo $user_avatar ?></div>
<?php endif; ?>
				<p><?php echo $lang['Avatar info'] ?></p>
				<p><?php echo $avatar_field ?></p>
			</fieldset>
		</div>
	</div>
<?php endif; if ($luna_config['o_signatures'] == '1'): ?>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"><?php echo $lang['Signature legend'] ?><span class="pull-right"><input class="btn btn-primary" type="submit" name="update" value="<?php echo $lang['Submit'] ?>" /></span></h3>
		</div>
		<div class="panel-body">
			<fieldset>
				<p><?php echo $lang['Signature info'] ?></p>
				<label><?php printf($lang['Sig max size'], forum_number_format($luna_config['p_sig_length']), $luna_config['p_sig_lines']) ?></label>
				<textarea class="form-control" name="signature" rows="4"><?php echo luna_htmlspecialchars($user['signature']) ?></textarea>
				<ul class="bblinks">
					<li><a class="label <?php echo ($luna_config['p_sig_bbcode'] == '1') ? "label-success" : "label-danger"; ?>" href="help.php#bbcode" onclick="window.open(this.href); return false;"><?php echo $lang['BBCode'] ?></a></li>
					<li><a class="label <?php echo ($luna_config['p_sig_bbcode'] == '1' && $luna_config['p_sig_img_tag'] == '1') ? "label-success" : "label-danger"; ?>" href="help.php#img" onclick="window.open(this.href); return false;"><?php echo $lang['img tag'] ?></a></li>
					<li><a class="label <?php echo ($luna_config['o_smilies_sig'] == '1') ? "label-success" : "label-danger"; ?>" href="help.php#smilies" onclick="window.open(this.href); return false;"><?php echo $lang['Smilies'] ?></a></li>
				</ul>
				<?php echo $signature_preview ?>
			</fieldset>
		</div>
	</div>
<?php endif; ?>
</form>

<?php
	require FORUM_ROOT.'footer.php';
?>