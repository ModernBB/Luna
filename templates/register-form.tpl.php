<?php

// Make sure there's no direct access to this template.
if (!defined('FORUM_ROOT'))
    exit('The constant FORUM_ROOT must be defined and point to a valid ModernBB installation root directory.');

?>

<h2><?php echo $lang['Register'] ?></h2>
<form class="form-horizontal" id="register" method="post" action="register.php?action=register" onsubmit="this.register.disabled=true;if (process_form(this)) {return true;} else {this.register.disabled=false;return false;}">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo $lang['Register legend'] ?><span class="pull-right"><input type="submit" class="btn btn-primary" name="register" value="<?php echo $lang['Register'] ?>" /></span></h3>
        </div>
        <div class="panel-body">
            <fieldset>
                <input type="hidden" name="form_sent" value="1" />
                <label class="required usernamefield"><?php echo $lang['If human'] ?><input type="text" class="form-control" name="req_username" value="" maxlength="25" /></label>
                <div class="form-group">
                    <label class="col-sm-2 control-label"><?php echo $lang['Username'] ?></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="req_user" value="<?php if (isset($_POST['req_user'])) echo luna_htmlspecialchars($_POST['req_user']); ?>" maxlength="25" />
                        <span class="help-block"><?php echo $lang['Username legend'] ?></span>
                    </div>
                </div>
<?php if ($luna_config['o_regs_verify'] == '0'): ?>
                <div class="form-group">
                    <label class="col-sm-2 control-label"><?php echo $lang['Password'] ?></label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="req_password1" value="<?php if (isset($_POST['req_password1'])) echo luna_htmlspecialchars($_POST['req_password1']); ?>" />
                        <input type="password" class="form-control" name="req_password2" value="<?php if (isset($_POST['req_password2'])) echo luna_htmlspecialchars($_POST['req_password2']); ?>" />
                        <span class="help-block"><?php echo $lang['Pass info'] ?></span>
                    </div>
                </div>
<?php endif; ?>
                <div class="form-group">
                    <label class="col-sm-2 control-label"><?php echo $lang['Email'] ?></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="req_email1" value="<?php if (isset($_POST['req_email1'])) echo luna_htmlspecialchars($_POST['req_email1']); ?>" maxlength="80" />
                        <?php if ($luna_config['o_regs_verify'] == '1'): ?><input type="text" class="form-control" name="req_email2" value="<?php if (isset($_POST['req_email2'])) echo luna_htmlspecialchars($_POST['req_email2']); ?>" maxlength="80" /><?php endif; ?>
                        <?php if ($luna_config['o_regs_verify'] == '1'): ?><span class="help-block"><?php echo $lang['Email info'] ?></span><?php endif; ?>
                    </div>
                </div>
<?php

        $languages = forum_list_langs();

        // Only display the language selection box if there's more than one language available
        if (count($languages) > 1) {

?>
                <div class="form-group">
                    <label class="col-sm-2 control-label"><?php echo $lang['Language'] ?></label>
                    <div class="col-sm-10">
                        <select class="form-control" name="language">
<?php

            foreach ($languages as $temp) {
                if ($luna_config['o_default_lang'] == $temp)
                    echo "\t\t\t\t\t\t\t\t".'<option value="'.$temp.'" selected="selected">'.$temp.'</option>'."\n";
                else
                    echo "\t\t\t\t\t\t\t\t".'<option value="'.$temp.'">'.$temp.'</option>'."\n";
            }

?>
                        </select>
                    </div>
                </div>
<?php

        }
?>
            </fieldset>
        </div>
    </div>
</form>

<?php
    require FORUM_ROOT.'footer.php';
