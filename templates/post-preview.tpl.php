<?php

// Make sure there's no direct access to this template.
if (!defined('FORUM_ROOT'))
    exit('The constant FORUM_ROOT must be defined and point to a valid ModernBB installation root directory.');

?>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo $lang['Post preview'] ?></h3>
        </div>
        <div class="panel-body">
            <?php echo $preview_message."\n" ?>
        </div>
    </div>
