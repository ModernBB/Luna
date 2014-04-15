<?php

// Make sure there's no direct access to this template.
if (!defined('FORUM_ROOT'))
	exit('The constant FORUM_ROOT must be defined and point to a valid ModernBB installation root directory.');

?>

<div class="row row-nav-fix">
    <div class="col-sm-6">
        <div class="btn-group btn-breadcrumb">
            <a class="btn btn-primary" href="index.php"><span class="glyphicon glyphicon-home"></span></a>
            <a class="btn btn-primary" href="search.php"><?php echo $crumbs_text['show_as'] ?></a>
            <?php echo $crumbs_text['search_type'] ?>
        </div>
    </div>
    <div class="col-sm-6">
        <ul class="pagination">
            <?php echo $paging_links ?>
        </ul>
    </div>
</div>