<?php

// Make sure there's no direct access to this template.
if (!defined('FORUM_ROOT'))
	exit('The constant FORUM_ROOT must be defined and point to a valid ModernBB installation root directory.');

?>

    <div class="forum-box">
        <div class="row forum-header">
            <div class="col-xs-6"><?php echo $lang['Topic'] ?></div>
            <div class="col-xs-2 hidden-xs"><?php echo $lang['Forum'] ?></div>
            <div class="col-xs-1 hidden-xs"><p class="text-center"><?php echo $lang['Replies forum'] ?></p></div>
            <div class="col-xs-3 col-search"><?php echo $lang['Last post'] ?></div>
        </div>