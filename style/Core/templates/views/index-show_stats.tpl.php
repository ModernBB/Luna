<?php

// Make sure no one attempts to run this view directly.
if (!defined('FORUM'))
    exit;

if ($luna_user['g_view_users'] == '1')
    $stats['newest_user'] = '<a href="profile.php?id='.$stats['last_user']['id'].'">'.luna_htmlspecialchars($stats['last_user']['username']).'</a>';
else
    $stats['newest_user'] = luna_htmlspecialchars($stats['last_user']['username']);


if ($luna_config['o_show_index_stats'] == 1) {
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $lang['Board stats'] ?></h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-2 col-sm-4 col-xs-6">
                <span>
                    <?php printf($lang['No of users'], '<strong>'.forum_number_format($stats['total_users']).'</strong>') ?>
                </span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <span>
                    <?php printf($lang['No of topics'], '<strong>'.forum_number_format($stats['total_topics']).'</strong>') ?>
                </span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <span>
                    <?php printf($lang['No of post'], '<strong>'.forum_number_format($stats['total_posts']).'</strong>') ?>
                </span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <span>
                    <?php printf($lang['Newest user'], $stats['newest_user']) ?>
                </span>
            </div>

            <?php if ($luna_config['o_users_online'] == '1') { ?>

            <div class="col-md-2 col-sm-4 col-xs-6">
                <span>
                    <?php echo sprintf($lang['Users online'], '<strong>'.forum_number_format( num_users_online() ).'</strong>') ?>
                </span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <span>
                    <?php echo sprintf($lang['Guests online'], '<strong>'.forum_number_format( num_guests_online() ).'</strong>') ?>
                </span>
            </div>
        </div>

        <div class="row">
            <span class="users-online">
                <strong>
                    <?php echo $lang['Online'] ?>
                </strong>

                <?php
                    $result = $db->query('SELECT user_id, ident FROM '.$db->prefix.'online WHERE idle=0 ORDER BY ident', true) or error('Unable to fetch online list', __FILE__, __LINE__, $db->error());
                ?>

                <?php while ($luna_user_online = $db->fetch_assoc($result)) { ?>

                    <?php if ($luna_user_online['user_id'] > 1) { ?>

                        <?php if ($luna_user['g_view_users'] == '1') { ?>
                            <a href="profile.php?id=<?php echo $luna_user_online['user_id'] ?>">
                                <?php echo luna_htmlspecialchars($luna_user_online['ident']) ?>
                            </a>
                            <?php ++$num_users ?>
                        <?php } else { ?>
                            <?php echo luna_htmlspecialchars($luna_user_online['ident']) ?>
                        <?php } ?>

                    <?php } else { ?>
                        <?php ++$num_guests ?>
                    <?php } ?>

                <?php } ?>

            </span>
        </div>

<?php } ?>
    </div>
</div>
<?php
}

$footer_style = 'index';
require FORUM_ROOT.'footer.php';