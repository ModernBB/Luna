<?php

// Make sure there's no direct access to this template.
if (!defined('FORUM_ROOT'))
	exit('The constant FORUM_ROOT must be defined and point to a valid ModernBB installation root directory.');

?>

<div class="blockpost<?php echo ($post_count % 2 == 0) ? ' roweven' : ' rowodd' ?><?php if ($cur_search['pid'] == $cur_search['first_post_id']) echo ' firstpost' ?><?php if ($post_count == 1) echo ' blockpost1' ?><?php if ($item_status != '') echo ' '.$item_status ?>">
    <table class="table">
        <tr>
            <td class="col-lg-2 user-data">
                <?php echo $pposter ?><br />
                <?php if ($cur_search['pid'] == $cur_search['first_post_id']) : ?>
                    <?php echo $lang['Replies'].' '.forum_number_format($cur_search['num_replies']) ?>
                <?php endif; ?>
            </td>
            <td class="col-lg-10">
                <?php echo $message."\n" ?>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="postfooter" style="padding-bottom: 0;">
                <div class="btn-group btn-breadcrumb">
                    <?php if ($cur_search['pid'] != $cur_search['first_post_id']) echo $lang['Re'].' ' ?><?php echo $forum ?>
                    <a class="btn btn-primary" href="viewtopic.php?id=<?php echo $cur_search['tid'] ?>"><?php echo luna_htmlspecialchars($cur_search['subject']) ?></a>
                    <a class="btn btn-primary" href="viewtopic.php?pid=<?php echo $cur_search['pid'].'#p'.$cur_search['pid'] ?>"><?php echo format_time($cur_search['pposted']) ?></a>
                </div>
                <p class="pull-right">
                    <a class="btn btn-small btn-primary" href="viewtopic.php?id=<?php echo $cur_search['tid'] ?>"><?php echo $lang['Go to topic'] ?></a>
                    <a class="btn btn-small btn-primary" href="viewtopic.php?pid=<?php echo $cur_search['pid'].'#p'.$cur_search['pid'] ?>"><?php echo $lang['Go to post'] ?></a>
                </p>
            </td>
        </tr>
    </table>
</div>