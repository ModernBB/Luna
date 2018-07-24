<?php

// Make sure no one attempts to run this view directly.
if (!defined('FORUM'))
	exit;

$jumbo_style = ' style="background:'.$cur_comment['color'].';"';
$btn_style = ' style="color:'.$cur_comment['color'].';"';

?>
<div class="main container">
	<div class="jumbotron titletron"<?php echo $jumbo_style ?>>
		<h2 class="forum-title">
            <small>
                <?php _e('Edit comment', 'luna') ?>
            </small>
            <?php echo luna_htmlspecialchars($cur_comment['subject']) ?>
            <span class="float-right naviton">
                <a class="btn btn-light"<?php echo $btn_style ?> href="thread.php?id=<?php echo $cur_comment['tid'] ?>">
                    <i class="fas fa-fw fa-chevron-left"></i> <?php _e('Cancel', 'luna') ?>
                </a>
            </span>
		</h2>
	</div>
<?php
if (isset($errors))
	draw_error_panel($errors);
if (isset($message))
	draw_preview_panel($message);
?>
    <form id="edit" method="post" action="edit.php?id=<?php echo $id ?>&amp;action=edit" onsubmit="return process_form(this)">
        <?php if ($can_edit_subject): ?>
            <input class="info-textfield form-control" type="text" name="req_subject" maxlength="70" value="<?php echo luna_htmlspecialchars(isset($_POST['req_subject']) ? $_POST['req_subject'] : $cur_comment['subject']) ?>" tabindex="<?php echo $cur_index++ ?>" />
        <?php endif; ?>
        <?php draw_editor('20'); ?>
        <?php draw_admin_note(); ?>
    </form>
</div>