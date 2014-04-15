<?php

// Make sure there's no direct access to this template.
if (!defined('FORUM_ROOT'))
	exit('The constant FORUM_ROOT must be defined and point to a valid ModernBB installation root directory.');

?>

<form id="search" method="get" action="search.php?section=advanced">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo $lang['Search criteria legend'] ?></h3>
        </div>
        <div class="panel-body">
            <fieldset>
                <input type="hidden"  name="action" value="search" />
            	<table>
                	<thead>
                    	<tr>
                        	<th><?php echo $lang['Keyword search'] ?></th>
                            <th><?php echo $lang['Author search'] ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    	<tr>
                        	<td><input class="form-control" type="text" name="keywords" maxlength="100" /></td>
                        	<td><input class="form-control" id="author" type="text" name="author" maxlength="25" /></td>
                        </tr>
                    </tbody>
                </table>
                <p class="help-block"><?php echo $lang['Search info'] ?></p>
            </fieldset>
            <fieldset>
            	<div class="row">
<?php

// We either show a list of forums of which multiple can be selected
if ($luna_config['o_search_all_forums'] == '1' || $luna_user['is_admmod'])
{
	echo "\t\t\t\t\t\t".'<div class="col-xs-4"><div class="conl multiselect"><b>'.$lang['Forum'].'</b>'."\n";
	echo "\t\t\t\t\t\t".'<br />'."\n";
	echo "\t\t\t\t\t\t".'<div>'."\n";

	$cur_category = 0;
	while ($cur_forum = $db->fetch_assoc($result))
	{
		if ($cur_forum['cid'] != $cur_category) // A new category since last iteration?
		{
			if ($cur_category)
			{
				echo "\t\t\t\t\t\t\t\t".'</div>'."\n";
				echo "\t\t\t\t\t\t\t".'</fieldset>'."\n";
			}
			echo "\t\t\t\t\t\t\t".'<fieldset><h3 class="forum-list"><span>'.luna_htmlspecialchars($cur_forum['cat_name']).'</span></h3>'."\n";
			echo "\t\t\t\t\t\t\t\t".'<div class="rbox">';
			$cur_category = $cur_forum['cid'];
		}
		echo "\t\t\t\t\t\t\t\t".'<input type="checkbox" name="forums[]" id="forum-'.$cur_forum['fid'].'" value="'.$cur_forum['fid'].'" /> '.luna_htmlspecialchars($cur_forum['forum_name']).'<br />'."\n";
 	}

	if ($cur_category)
	{
		echo "\t\t\t\t\t\t\t\t".'</div>'."\n";
		echo "\t\t\t\t\t\t\t".'</fieldset>'."\n";
	}

	echo "\t\t\t\t\t\t".'</div>'."\n";
	echo "\t\t\t\t\t\t".'</div></div>'."\n";
}
// ... or a simple select list for one forum only
else
{
	echo "\t\t\t\t\t\t".'<div class="col-xs-4"><label class="conl">'.$lang['Forum']."\n";
	echo "\t\t\t\t\t\t".'<br />'."\n";
	echo "\t\t\t\t\t\t".'<select id="forum" name="forum">'."\n";

	$cur_category = 0;
	while ($cur_forum = $db->fetch_assoc($result))
	{
		if ($cur_forum['cid'] != $cur_category) // A new category since last iteration?
		{
			if ($cur_category)
				echo "\t\t\t\t\t\t\t".'</optgroup>'."\n";

			echo "\t\t\t\t\t\t\t".'<optgroup label="'.luna_htmlspecialchars($cur_forum['cat_name']).'">'."\n";
			$cur_category = $cur_forum['cid'];
		}

		echo "\t\t\t\t\t\t\t\t".'<option value="'.$cur_forum['fid'].'">'.($cur_forum['parent_forum_id'] == 0 ? '' : '&nbsp;&nbsp;&nbsp;').luna_htmlspecialchars($cur_forum['forum_name']).'</option>'."\n";
	}

	echo "\t\t\t\t\t\t\t".'</optgroup>'."\n";
	echo "\t\t\t\t\t\t".'</select>'."\n";
	echo "\t\t\t\t\t\t".'<br /></label></div>'."\n";
}

?>
                    <div class="col-xs-8">
                        <label class="conl"><?php echo $lang['Search in']."\n" ?></label>
                        <select class="form-control" id="search_in" name="search_in">
                            <option value="0"><?php echo $lang['Message and subject'] ?></option>
                            <option value="1"><?php echo $lang['Message only'] ?></option>
                            <option value="-1"><?php echo $lang['Topic only'] ?></option>
                        </select>
                        <table>
                            <thead>
                                <tr>
                                    <th><?php echo $lang['Sort by'] ?></th>
                                    <th><?php echo $lang['Sort order'] ?></th>
                                    <th><?php echo $lang['Show as'] ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <select class="form-control" name="sort_by">
                                            <option value="0"><?php echo $lang['Sort by post time'] ?></option>
                                            <option value="1"><?php echo $lang['Sort by author'] ?></option>
                                            <option value="2"><?php echo $lang['Subject'] ?></option>
                                            <option value="3"><?php echo $lang['Forum'] ?></option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control" name="sort_dir">
                                            <option value="DESC"><?php echo $lang['Descending'] ?></option>
                                            <option value="ASC"><?php echo $lang['Ascending'] ?></option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control" name="show_as">
                                            <option value="topics"><?php echo $lang['Show as topics'] ?></option>
                                            <option value="posts"><?php echo $lang['Show as posts'] ?></option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="help-block"><?php echo $lang['Search results info'] ?></p>
                    </div>
                </div>
            </fieldset>
        </div>
        <div class="panel-footer">
            <input class="btn btn-primary" type="submit" name="search" value="<?php echo $lang['Search'] ?>" accesskey="s" />
        </div>
    </div>
</form>

<?php
	require FORUM_ROOT.'footer.php';
?>