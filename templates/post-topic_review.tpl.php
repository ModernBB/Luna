<?php

// Make sure there's no direct access to this template.
if (!defined('FORUM_ROOT'))
    exit('The constant FORUM_ROOT must be defined and point to a valid ModernBB installation root directory.');

?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $lang['Topic review'] ?></h3>
    </div>
    <div class="panel-body">
<?php

    // Set background switching on
    $post_count = 0;

    while ($cur_post = $db->fetch_assoc($result)) {
        $post_count++;

        $cur_post['message'] = parse_message($cur_post['message'], $cur_post['hide_smilies']);

?>
        <table class="table postview">
            <tr>
                <td class="col-lg-2  user-data">
                    <h4 class="username"><?php echo luna_htmlspecialchars($cur_post['poster']) ?></h4>
                    <span><?php echo format_time($cur_post['posted']) ?></span>
                </td>
                <td class="col-lg-10 post-content">
                    <?php echo $cur_post['message']."\n" ?>
                </td>
            <tr>
        </table>
<?php

    }

?>
    </div>
</div>
