<?php
require ('header.php');
?>
<!DOCTYPE html>
<html class="<?php echo check_style_mode() ?>">
	<head>
		<?php load_meta(); ?>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="vendor/css/prism.css">
		<?php load_css(); ?>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="vendor/js/prism.js"></script>
		<style>
        <?php if ($luna_config['o_use_custom_css']) {
            echo $luna_config['o_custom_css'];
        } ?>
		.emoji {
			font-size: <?php echo $luna_config['o_emoji_size'] ?>px;
		}
		</style>
	</head>
	<body>
		<?php if ($luna_user['is_guest']): require load_page('login.php'); endif; ?>
        <div id="header">
            <div class="navbar navbar-inverse navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-primary-collapse">
                            <span class="icon-bar<?php echo (($num_new_pm != 0 || $num_notifications != 0)? ' flash' : '') ?>"></span>
                            <span class="icon-bar<?php echo (($num_new_pm != 0 || $num_notifications != 0)? ' flash' : '') ?>"></span>
                            <span class="icon-bar<?php echo (($num_new_pm != 0 || $num_notifications != 0)? ' flash' : '') ?>"></span>
                        </button>
                        <a class="navbar-brand" href="index.php"><?php echo $menu_title ?></a>
                    </div>
                    <div class="navbar-primary-collapse navbar-collapse collapse">
                        <ul class="nav navbar-nav"><?php echo implode("\n\t\t\t\t", $links); ?></ul>
                        <ul class="nav navbar-nav navbar-right"><?php echo $usermenu; ?></ul>
                    </div>
                </div>
            </div>
        </div>
