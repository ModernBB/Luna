<?php

// Make sure there's no direct access to this template.
if (!defined('FORUM_ROOT'))
    exit('The constant FORUM_ROOT must be defined and point to a valid ModernBB installation root directory.');

?>

<h2><?php echo luna_htmlspecialchars($cur_forum['forum_name']) ?></h2>
<div class="row row-nav">
    <div class="col-sm-6">
        <div class="btn-group btn-breadcrumb">
            <a class="btn btn-primary" href="index.php"><span class="glyphicon glyphicon-home"></span></a>
            <a class="btn btn-primary" href="viewforum.php?id=<?php echo $id ?>"><?php echo luna_htmlspecialchars($cur_forum['forum_name']) ?></a>
        </div>
    </div>
    <div class="col-sm-6">
        <?php echo $post_link ?>
        <ul class="pagination">
            <?php echo $paging_links ?>
        </ul>
    </div>
</div>
<div class="forum-box">
    <div class="row forum-header">
        <div class="col-xs-12"><?php echo $lang['Topic'] ?></div>
    </div>