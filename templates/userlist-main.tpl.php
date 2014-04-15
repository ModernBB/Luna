<?php

// Make sure there's no direct access to this template.
if (!defined('FORUM_ROOT'))
    exit('The constant FORUM_ROOT must be defined and point to a valid ModernBB installation root directory.');

?>

<h2><?php echo $lang['User list'] ?></h2>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $lang['User list'] ?></h3>
    </div>
    <div class="panel-body">
        <form id="userlist" class="usersearch" method="get" action="userlist.php">
            <fieldset>
                <div class="row">
                    <div class="col-sm-5">
                        <?php if ($luna_user['g_search_users'] == '1'): ?>
                            <input class="form-control" type="text" name="username" value="<?php echo luna_htmlspecialchars($username) ?>" placeholder="<?php echo $lang['Username'] ?>" maxlength="25" />
                        <?php endif; ?>
                    </div>
                    <div class="col-sm-2">
                        <select class="form-control" name="show_group">
                            <option value="-1"<?php if ($show_group == -1) echo ' selected="selected"' ?>><?php echo $lang['All users'] ?></option>
<?php require FORUM_ROOT.'templates/userlist-user_group_list.tpl.php'; ?>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select class="form-control" name="sort_by">
                        <option value="username"<?php if ($sort_by == 'username') echo ' selected="selected"' ?>><?php echo $lang['Username'] ?></option>
                        <option value="registered"<?php if ($sort_by == 'registered') echo ' selected="selected"' ?>><?php echo $lang['Registered table'] ?></option>
                        <?php if ($show_post_count): ?>
                            <option value="num_posts"<?php if ($sort_by == 'num_posts') echo ' selected="selected"' ?>><?php echo $lang['No of posts'] ?></option>
                        <?php endif; ?>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select class="form-control" name="sort_dir">
                        <option value="ASC"<?php if ($sort_dir == 'ASC') echo ' selected="selected"' ?>><?php echo $lang['Ascending'] ?></option>
                        <option value="DESC"<?php if ($sort_dir == 'DESC') echo ' selected="selected"' ?>><?php echo $lang['Descending'] ?></option>
                    </select>
                </div>
                <div class="col-sm-1">
                    <input class="btn btn-primary" type="submit" name="search" value="<?php echo $lang['Submit'] ?>" accesskey="s" />
                </div>
            </fieldset>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <ul class="pagination pagination-user-top">
            <?php echo $paging_links ?>
        </ul>
    </div>
</div>
<?php require FORUM_ROOT.'templates/userlist-user_list.tpl.php'; ?>
<div class="row">
    <div class="col-sm-12">
        <ul class="pagination pagination-user-bottom">
            <?php echo $paging_links ?>
        </ul>
    </div>
</div>

<?php
    require FORUM_ROOT.'footer.php';
?>