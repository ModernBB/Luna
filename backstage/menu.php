<?php

/**
 * Copyright (C) 2013-2014 Luna
 * Licensed under GPLv3 (http://modernbb.be/license.php)
 */

define('FORUM_ROOT', '../');
require '../include/common.php';

if (!$luna_user['is_admmod'])
    header("Location: ../login.php");

if ($luna_user['g_id'] != FORUM_ADMIN)
	message_backstage($lang['No permission'], false, '403 Forbidden');

// Add a new item
if (isset($_POST['add_item'])) {
	confirm_referrer('backstage/menu.php');

	$item_name = luna_trim($_POST['name']);
	$item_url = luna_trim($_POST['url']);

	$db->query('INSERT INTO '.$db->prefix.'menu (url, name, disp_position, visible, sys_entry) VALUES(\''.$item_url.'\', \''.$item_name.'\', 0, 1, 0)') or error('Unable to add new menu item', __FILE__, __LINE__, $db->error());

	redirect('backstage/menu.php');
} else if (isset($_GET['del_item'])) {
	confirm_referrer('backstage/menu.php');

	$item_id = intval($_GET['del_item']);
	if ($item_id < 5)
		message_backstage($lang['Bad request'], false, '404 Not Found');

	$db->query('DELETE FROM '.$db->prefix.'menu WHERE id='.$item_id) or error('Unable to delete menu item', __FILE__, __LINE__, $db->error());

	redirect('backstage/menu.php');
}

$result = $db->query('SELECT id, url, name, disp_position, visible, sys_entry FROM '.$db->prefix.'menu ORDER BY disp_position') or error('Unable to fetch menu items', __FILE__, __LINE__, $db->error());

require 'header.php';
load_admin_nav('settings', 'menu');

?>
<div class="row">
	<div class="col-sm-4 col-md-3">
		<form method="post" action="menu.php?action=add_item">
			<fieldset>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">New menu item<span class="pull-right"><input class="btn btn-primary" type="submit" name="add_item" value="<?php echo $lang['Add'] ?>" /></span></h3>
					</div>
					<table class="table">
						<tbody>
							<tr>
								<td>
									<input type="text" class="form-control" name="name" placeholder="Name" value="" />
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" class="form-control" name="url" placeholder="URL" value="" />
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			<fieldset>
		</form>
	</div>
	<div class="col-sm-8 col-md-9">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Menu<span class="pull-right"><input class="btn btn-primary" type="submit" name="save" value="<?php echo $lang['Save'] ?>" /></span></h3>
			</div>
			<table class="table">
				<thead>
					<tr>
						<th>Name</th>
						<th>URL</th>
						<th class="col-xs-1">Position</th>
						<th class="col-xs-1">Show</th>
						<th class="col-xs-1">Delete</th>
					</tr>
				</thead>
				<tbody>
<?php
if ($db->num_rows($result) > 0) {
	while ($cur_item = $db->fetch_assoc($result)) {
?>
					<tr>
						<td>
							<input type="text" class="form-control" value="<?php echo $cur_item['name'] ?>" />
						</td>
						<td>
							<input type="text" class="form-control" value="<?php echo $cur_item['url'] ?>" <?php if ($cur_item['sys_entry'] == 1) echo ' disabled="disabled"' ?> />
						</td>
						<td>
							<input type="text" class="form-control" value="<?php echo $cur_item['disp_position'] ?>" />
						</td>
						<td>
							<input type="checkbox" value="1" <?php if ($cur_item['visible'] == 1) echo ' checked="checked"' ?> />
						</td>
						<td>
<?php
if ($cur_item['sys_entry'] == 0)
	echo '<a href="menu.php?del_item='.$cur_item['id'].'" class="btn btn-danger">Delete</a>';
else
	echo '<a class="btn btn-danger" disabled="disabled">Delete</a>';
?>
						</td>
					</tr>
<?php
	}
}
?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php

require 'footer.php';
