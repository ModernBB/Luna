<?php

// Make sure there's no direct access to this template.
if (!defined('FORUM_ROOT'))
    exit('The constant FORUM_ROOT must be defined and point to a valid ModernBB installation root directory.');

?>

<form class="form" id="request_pass" method="post" action="login.php?action=forget_2" onsubmit="this.request_pass.disabled=true;if (process_form(this)) {return true;} else {this.request_pass.disabled=false;return false;}">
    <h1 class="form-heading"><?php echo $lang['Request pass'] ?></h1>
    <fieldset>
        <input type="hidden" name="form_sent" value="1" />
        <label class="required"><input class="form-control" type="text" name="req_email" placeholder="<?php echo $lang['Email'] ?>" /></label>
        <div class="pull-right" style="margin-top: 60px;">
            <?php if (empty($errors)): ?><a class="btn btn-link" href="javascript:history.go(-1)"><?php echo $lang['Go back'] ?></a><?php endif; ?><input class="btn btn-primary" type="submit" name="request_pass" value="<?php echo $lang['Submit'] ?>" />
        </div>
    </fieldset>
</form>

<?php
    require FORUM_ROOT.'footer.php';
