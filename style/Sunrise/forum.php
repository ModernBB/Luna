<?php

// Make sure no one attempts to run this view directly.
if (!defined('FORUM'))
    exit;

$jumbo_style = 'style="background:'.$cur_forum['color'].';"';

?>
</div>
<div class="jumbotron<?php echo $item_status ?>"<?php echo $jumbo_style ?>>
	<div class="container">
		<h2><?php echo luna_htmlspecialchars($cur_forum['forum_name']) ?></h2><span class="pull-right"><?php echo $post_link ?><?php echo $paging_links ?></span>
	</div>
</div>
<div class="container">
	<div class="row forumview">
		<div class="col-sm-3">
			<div class="list-group list-group-forum">
				<a class="list-group-item" href="index.php"><span class="fa fa-fw fa-chevron-left"></span> Back to index</a>
			</div>
			<hr />
			<?php if ((is_subforum($id) && $id != '0')): ?>
				<h5 class="list-group-head">Subforums</h5>
				<div class="list-group list-group-forum">
					<?php draw_subforum_list('index.php', $id) ?>
				</div>
				<hr />
			<?php endif; ?>
			<div class="list-group list-group-forum">
				<?php draw_mark_read('list-group-item', 'forumview') ?>
				<?php if ($id != '0' && $is_admmod) { ?>
					<a class="list-group-item" href="backstage/moderate.php?fid=<?php echo $forum_id ?>&p=<?php echo $p ?>"><span class="fa fa-fw fa-eye"></span> <?php echo $lang['Moderate forum'] ?></a>
				<?php } ?>
			</div>
		</div>
		<div class="col-sm-9">
			<?php draw_topics_list(); ?>
		</div>
	</div>