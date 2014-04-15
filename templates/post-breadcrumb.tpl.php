<?php

// Make sure there's no direct access to this template.
if (!defined('FORUM_ROOT'))
    exit('The constant FORUM_ROOT must be defined and point to a valid ModernBB installation root directory.');

?>

<div class="btn-group btn-breadcrumb">
    <a class="btn btn-primary" href="index.php"><span class="glyphicon glyphicon-home"></span></a>
    <a class="btn btn-primary" href="viewforum.php?id=<?php echo $cur_posting['id'] ?>"><?php echo luna_htmlspecialchars($cur_posting['forum_name']) ?></a>
    <?php if (isset($_POST['req_subject'])): ?>
        <a class="btn btn-primary" href="viewtopic.php?id=<?php echo $cur_post['tid'] ?>"><?php echo luna_htmlspecialchars($_POST['req_subject']) ?></a>
    <?php endif; ?>
    <?php if (isset($cur_posting['subject'])): ?>
        <a class="btn btn-primary" href="viewtopic.php?id=<?php echo $tid ?>"><?php echo luna_htmlspecialchars($cur_posting['subject']) ?></a>
    <?php endif; ?>
    <?php if (!isset($_POST['req_subject'])): ?>
        <a class="btn btn-primary" href="#"><?php echo $action ?></a>
    <?php endif; ?>
</div>
