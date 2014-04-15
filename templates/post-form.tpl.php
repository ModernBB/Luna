<?php

// Make sure there's no direct access to this template.
if (!defined('FORUM_ROOT'))
    exit('The constant FORUM_ROOT must be defined and point to a valid ModernBB installation root directory.');

echo $form."\n"; // Form opening tag generated from post.php depending on GET values
?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo $action ?></h3>
        </div>
        <fieldset class="postfield">
            <input type="hidden" name="form_sent" value="1" />
<?php if ($luna_user['is_guest']):

    $email_label = ($luna_config['p_force_guest_email'] == '1') ? '<strong>'.$lang['Email'].'</strong>' : $lang['Email'];
    $email_form_name = ($luna_config['p_force_guest_email'] == '1') ? 'req_email' : 'email';

?>
            <label class="required hidden"><?php echo $lang['Guest name'] ?></label><input class="form-control" type="text" placeholder="<?php echo $lang['Guest name'] ?>" name="req_username" value="<?php if (isset($_POST['req_username'])) echo luna_htmlspecialchars($username); ?>" maxlength="25" tabindex="<?php echo $cur_index++ ?>" />
            <label class="conl<?php echo ($luna_config['p_force_guest_email'] == '1') ? ' required' : '' ?> hidden"><?php echo $email_label ?></label><input class="form-control" type="text" placeholder="<?php echo $lang['Email'] ?>" name="<?php echo $email_form_name ?>" value="<?php if (isset($_POST[$email_form_name])) echo luna_htmlspecialchars($email); ?>" maxlength="80" tabindex="<?php echo $cur_index++ ?>" />
<?php endif; ?>

<?php if ($fid): ?>
            <label class="required hidden"><?php echo $lang['Subject'] ?></label><input class="longinput form-control" placeholder="<?php echo $lang['Subject'] ?>" type="text" name="req_subject" value="<?php if (isset($_POST['req_subject'])) echo luna_htmlspecialchars($subject); ?>" maxlength="70" tabindex="<?php echo $cur_index++ ?>" />
<?php endif; ?>
            <textarea class="form-control tinymce"  placeholder="Start typing..." name="req_message" rows="20" tabindex="<?php echo $cur_index++ ?>"><?php echo isset($_POST['req_message']) ? luna_htmlspecialchars($orig_message) : (isset($quote) ? $quote : ''); ?></textarea>
        </fieldset>
        <div class="panel-footer">
            <div class="btn-group"><input class="btn btn-primary" onclick="tinyMCE.triggerSave(false);" type="submit" name="submit" value="<?php echo $lang['Submit'] ?>" tabindex="<?php echo $cur_index++ ?>" accesskey="s" /><input class="btn btn-default" onclick="tinyMCE.triggerSave(false);" type="submit" name="preview" value="<?php echo $lang['Preview'] ?>" tabindex="<?php echo $cur_index++ ?>" accesskey="p" /> <a class="btn btn-link" href="javascript:history.go(-1)"><?php echo $lang['Go back'] ?></a></div>
            <ul class="bblinks">
                <li><a class="label <?php echo ($luna_config['p_message_bbcode'] == '1') ? "label-success" : "label-danger"; ?>" href="help.php#bbcode" onclick="window.open(this.href); return false;"><?php echo $lang['BBCode'] ?></a></li>
                <li><a class="label <?php echo ($luna_config['p_message_bbcode'] == '1' && $luna_config['p_message_img_tag'] == '1') ? "label-success" : "label-danger"; ?>" href="help.php#img" onclick="window.open(this.href); return false;"><?php echo $lang['img tag'] ?></a></li>
                <li><a class="label <?php echo ($luna_config['o_smilies'] == '1') ? "label-success" : "label-danger"; ?>" href="help.php#smilies" onclick="window.open(this.href); return false;"><?php echo $lang['Smilies'] ?></a></li>
            </ul>
        </div>
    </div>

    <?php require FORUM_ROOT.'templates/post-checkboxes.tpl.php'; ?>

</form>
