<?php

// Make sure there's no direct access to this template.
if (!defined('FORUM_ROOT'))
	exit('The constant FORUM_ROOT must be defined and point to a valid ModernBB installation root directory.');

?>

        <div class="row topic-row <?php echo $item_status ?>">
            <div class="col-xs-6">
                <div class="<?php echo $icon_type ?>"><div class="nosize"><?php echo forum_number_format($topic_count + $start_from) ?></div></div>
                <div class="tclcon">
                    <?php echo $subject."\n" ?>
                </div>
            </div>
            <div class="col-xs-2 hidden-xs"><?php echo $forum ?></div>
            <div class="col-xs-1 hidden-xs"><p class="text-center"><?php echo forum_number_format($cur_search['num_replies']) ?></p></div>
            <div class="col-xs-3 col-search"><?php echo '<a href="viewtopic.php?pid='.$cur_search['last_post_id'].'#p'.$cur_search['last_post_id'].'">'.format_time($cur_search['last_post']).'</a> <span class="byuser">'.$lang['by'].' '.luna_htmlspecialchars($cur_search['last_poster']) ?></span></div>
        </div>