<?php

// Make sure there's no direct access to this template.
if (!defined('FORUM_ROOT'))
    exit('The constant FORUM_ROOT must be defined and point to a valid ModernBB installation root directory.');

?>

    <div class="row topic-row <?php echo $item_status ?>">
        <div class="col-sm-6 col-xs-6">
            <div class="<?php echo $icon_type ?>"><?php echo forum_number_format($topic_count + $start_from) ?></div>
            <div class="tclcon">
                <div>
                    <?php echo $subject."\n" ?>
                </div>
            </div>
        </div>
        <div class="col-sm-2 hidden-xs"><?php if (is_null($cur_topic['moved_to'])) { ?><b><?php echo forum_number_format($cur_topic['num_replies']) ?></b> <?php echo $replies_label ?><br /><b><?php echo forum_number_format($cur_topic['num_views']) ?></b> <?php echo $views_label ?><?php } ?></div>
        <div class="col-sm-4 col-xs-6"><?php echo $last_post ?></div>
    </div>