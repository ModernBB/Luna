<?php

// Make sure there's no direct access to this template.
if (!defined('FORUM_ROOT'))
    exit('The constant FORUM_ROOT must be defined and point to a valid ModernBB installation root directory.');

?>

    <div class="panel panel-danger">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo $lang['Post errors'] ?></h3>
        </div>
        <div class="panel-body">
<?php
    foreach ($errors as $cur_error)
        echo "\t\t\t\t".$cur_error."\n";
?>
        </div>
    </div>
