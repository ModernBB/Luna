<?php

// Make sure there's no direct access to this template.
if (!defined('FORUM_ROOT'))
    exit('The constant FORUM_ROOT must be defined and point to a valid ModernBB installation root directory.');

$cur_index = 1;

?>
<div class="btn-group btn-breadcrumb">
    <a class="btn btn-primary" href="index.php"><span class="glyphicon glyphicon-home"></span></a>
    <a class="btn btn-primary" href="viewforum.php?id=<?php echo $cur_topic['forum_id'] ?>"><?php echo luna_htmlspecialchars($cur_post['forum_name']) ?></a>
    <a class="btn btn-primary" href="viewtopic.php?id=<?php echo $cur_post['tid'] ?>"><?php echo luna_htmlspecialchars($cur_post['subject']) ?></a>
    <a class="btn btn-primary" href="#"><?php echo $lang['Edit post'] ?></a>
</div>

<?php if (!empty($errors)) { // If there are errors, we display them ?>
<div class="panel panel-danger">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $lang['Post errors'] ?></h3>
    </div>
    <div class="panel-body">
        <p>
<?php foreach ($errors as $cur_error) echo "\t\t\t\t".$cur_error."\n"; ?>
        </p>
    </div>
</div>

<?php
} elseif (isset($_POST['preview'])) {
    require_once FORUM_ROOT.'include/parser.php';
    $preview_message = parse_message($message, $hide_smilies);
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $lang['Post preview'] ?></h3>
    </div>
    <div class="panel-body">
        <?php echo $preview_message ?>
    </div>
</div>
<?php } ?>

<form id="edit" method="post" action="edit.php?id=<?php echo $id ?>&action=edit" onsubmit="return process_form(this)">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo $lang['Edit post'] ?></h3>
        </div>
        <fieldset class="postfield">
            <input type="hidden" name="form_sent" value="1" />
<?php if ($can_edit_subject): ?>
            <input class="longinput form-control" type="text" name="req_subject" maxlength="70" tabindex="<?php echo $cur_index++ ?>" value="<?php echo luna_htmlspecialchars(isset($_POST['req_subject']) ? $_POST['req_subject'] : $cur_post['subject']) ?>" />
<?php endif; ?>
            <textarea class="form-control tinymce" name="req_message" rows="20" tabindex="<?php echo $cur_index++ ?>"><?php echo luna_htmlspecialchars(isset($_POST['req_message']) ? $message : $cur_post['message']) ?></textarea>
        </fieldset>
        <div class="panel-footer">
            <div class="btn-group"><input type="submit" onclick="tinyMCE.triggerSave(false);" class="btn btn-primary" name="submit" value="<?php echo $lang['Submit'] ?>" tabindex="<?php echo $cur_index++ ?>" accesskey="s" /> <input type="submit" onclick="tinyMCE.triggerSave(false);" class="btn btn-default" name="preview" value="<?php echo $lang['Preview'] ?>" tabindex="<?php echo $cur_index++ ?>" accesskey="p" /></div> <a class="btn btn-link" href="javascript:history.go(-1)"><?php echo $lang['Go back'] ?></a>
            <ul class="bblinks">
                <li><a class="label <?php echo ($luna_config['p_message_bbcode'] == '1') ? "label-success" : "label-danger"; ?>" href="help.php#bbcode" onclick="window.open(this.href); return false;"><?php echo $lang['BBCode'] ?></a></li>
                <li><a class="label <?php echo ($luna_config['p_message_bbcode'] == '1' && $luna_config['p_message_img_tag'] == '1') ? "label-success" : "label-danger"; ?>" href="help.php#img" onclick="window.open(this.href); return false;"><?php echo $lang['img tag'] ?></a></li>
                <li><a class="label <?php echo ($luna_config['o_smilies'] == '1') ? "label-success" : "label-danger"; ?>" href="help.php#smilies" onclick="window.open(this.href); return false;"><?php echo $lang['Smilies'] ?></a></li>
            </ul>
        </div>
    </div>
<?php

$checkboxes = array();
if ($can_edit_subject && $is_admmod) {
    if (isset($_POST['stick_topic']) || $cur_post['sticky'] == '1')
        $checkboxes[] = '<div class="checkbox"><label><input type="checkbox" name="stick_topic" value="1" checked="checked" tabindex="'.($cur_index++).'" /> '.$lang['Stick topic'].'</label></div>';
    else
        $checkboxes[] = '<div class="checkbox"><label><input type="checkbox" name="stick_topic" value="1" tabindex="'.($cur_index++).'" /> '.$lang['Stick topic'].'</label></div>';
}

if ($luna_config['o_smilies'] == '1') {
    if (isset($_POST['hide_smilies']) || $cur_post['hide_smilies'] == '1')
        $checkboxes[] = '<div class="checkbox"><label><input type="checkbox" name="hide_smilies" value="1" checked="checked" tabindex="'.($cur_index++).'" /> '.$lang['Hide smilies'].'</label></div>';
    else
        $checkboxes[] = '<div class="checkbox"><label><input type="checkbox" name="hide_smilies" value="1" tabindex="'.($cur_index++).'" /> '.$lang['Hide smilies'].'</label></div>';
}

if ($is_admmod) {
    if ((isset($_POST['form_sent']) && isset($_POST['silent'])) || !isset($_POST['form_sent']))
        $checkboxes[] = '<div class="checkbox"><label><input type="checkbox" name="silent" value="1" tabindex="'.($cur_index++).'" checked="checked" /> '.$lang['Silent edit'].'</label></div>';
    else
        $checkboxes[] = '<div class="checkbox"><label><input type="checkbox" name="silent" value="1" tabindex="'.($cur_index++).'" /> '.$lang['Silent edit'].'</label></div>';
}

if (!empty($checkboxes)):

?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo $lang['Options'] ?></h3>
        </div>
        <div class="panel-body">
            <fieldset>
                <?php echo implode("\n\t\t\t\t\t\t\t", $checkboxes)."\n" ?>
            </fieldset>
        </div>
    </div>
<?php endif; ?>
</form>

<?php
    require FORUM_ROOT.'footer.php';
