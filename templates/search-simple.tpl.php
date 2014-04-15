<?php

// Make sure there's no direct access to this template.
if (!defined('FORUM_ROOT'))
	exit('The constant FORUM_ROOT must be defined and point to a valid ModernBB installation root directory.');

?>

<form id="search" method="get" action="search.php?section=simple">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo $lang['Search criteria legend'] ?></h3>
        </div>
        <div class="panel-body">
            <fieldset>
                <input type="hidden" name="action" value="search" />
            	<div class="input-group"><input class="form-control" type="text" name="keywords" maxlength="100" /><span class="input-group-btn"><input class="btn btn-primary" type="submit" name="search" value="<?php echo $lang['Search'] ?>" accesskey="s" /></span></div>
                <a class="hidden-xs" href="search.php?section=advanced"><?php echo $lang['Advanced search'] ?></a>
            </fieldset>
        </div>
    </div>
</form>

<?php
	require FORUM_ROOT.'footer.php';
?>