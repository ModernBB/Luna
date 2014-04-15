<?php

// Make sure there's no direct access to this template.
if (!defined('FORUM_ROOT'))
    exit('The constant FORUM_ROOT must be defined and point to a valid ModernBB installation root directory.');

?>

<div class="panel panel-default">
    <div id="rules-block" class="panel-heading">
        <h3 class="panel-title"><?php echo $lang['Forum rules'] ?></h3>
    </div>
    <div class="panel-body">
        <div class="usercontent"><?php echo $luna_config['o_rules_message'] ?></div>
    </div>
</div>

<?php
    require FORUM_ROOT.'footer.php';
