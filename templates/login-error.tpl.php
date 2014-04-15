<?php

// Make sure there's no direct access to this template.
if (!defined('FORUM_ROOT'))
    exit('The constant FORUM_ROOT must be defined and point to a valid ModernBB installation root directory.');

?>

<div id="posterror">
    <h2><?php echo $lang['New password errors'] ?></h2>
    <div class="error-info">
        <p><?php echo $lang['New passworderrors info'] ?></p>
        <ul class="error-list">
<?php

    foreach ($errors as $cur_error)
        echo "\t\t\t\t".'<li><strong>'.$cur_error.'</strong></li>'."\n";
?>
        </ul>
    </div>
</div>

<?php
    require FORUM_ROOT.'footer.php';
