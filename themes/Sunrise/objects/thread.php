<div class="list-group-item clearfix <?php echo $item_status ?><?php if ($cur_thread['soft'] == true) echo ' soft'; ?>">
	<div class="col-sm-6 col-xs-7">
		<?php echo $subject_status ?> <a href="<?php echo $url ?>" class="forum-title"><?php echo $subject ?></a><br />
		<?php echo $by ?> <?php echo $subject_multipage ?>
	</div>
	<div class="col-sm-1 hidden-xs">
		<?php echo '<h5>'.(($cur_thread['moved_to'] == 0)? $cur_thread['num_replies'] : '-').'</h5> <h6><small>'.$comments_label.'</small></h6>';  ?>
	</div>
	<div class="col-sm-1 hidden-xs">
		<?php echo '<h5>'.(($cur_thread['moved_to'] == 0)? $cur_thread['num_views'] : '-').'</h5> <h6><small>'.$views_label.'</small></h6>'; ?>
	</div>
	<div class="col-sm-4 col-xs-5 overflow">
        <span class="thread-date">
            <?php echo (($cur_thread['moved_to'] == 0)? $last_comment_date : '-') ?>
        </span>
	</div>
</div>
