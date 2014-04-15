<?php

// Make sure there's no direct access to this template.
if (!defined('FORUM_ROOT'))
    exit('The constant FORUM_ROOT must be defined and point to a valid ModernBB installation root directory.');

$checkboxes = array();
if ($fid && $is_admmod)
    $checkboxes[] = '<div class="checkbox"><label><input type="checkbox" name="stick_topic" value="1" tabindex="'.($cur_index++).'"'.(isset($_POST['stick_topic']) ? ' checked="checked"' : '').' /> '.$lang['Stick topic'].'</label></div>';

if (!$luna_user['is_guest']) {
    if ($luna_config['o_smilies'] == '1')
        $checkboxes[] = '<div class="checkbox"><label><input type="checkbox" name="hide_smilies" value="1" tabindex="'.($cur_index++).'"'.(isset($_POST['hide_smilies']) ? ' checked="checked"' : '').' /> '.$lang['Hide smilies'].'</label></div>';

    if ($luna_config['o_topic_subscriptions'] == '1') {
        $subscr_checked = false;

        // If it's a preview
        if (isset($_POST['preview']))
            $subscr_checked = isset($_POST['subscribe']) ? true : false;
        // If auto subscribed
        else if ($luna_user['auto_notify'])
            $subscr_checked = true;
        // If already subscribed to the topic
        else if ($is_subscribed)
            $subscr_checked = true;

        $checkboxes[] = '<div class="checkbox"><label><input type="checkbox" name="subscribe" value="1" tabindex="'.($cur_index++).'"'.($subscr_checked ? ' checked="checked"' : '').' /> '.($is_subscribed ? $lang['Stay subscribed'] : $lang['Subscribe topic']).'</label></div>';
    }
} elseif ($luna_config['o_smilies'] == '1')
    $checkboxes[] = '<div class="checkbox"><label><input type="checkbox" name="hide_smilies" value="1" tabindex="'.($cur_index++).'"'.(isset($_POST['hide_smilies']) ? ' checked="checked"' : '').' /> '.$lang['Hide smilies'].'</label></div>';

if (!empty($checkboxes)) {

?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo $lang['Options'] ?></h3>
        </div>
        <div class="panel-body">
            <fieldset>
                <?php echo implode($checkboxes) ?>
            </fieldset>
        </div>
    </div>
<?php

}
