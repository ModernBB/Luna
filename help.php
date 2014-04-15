<?php

/**
 * Copyright (C) 2013-2014 ModernBB Group
 * Based on code by FluxBB copyright (C) 2008-2012 FluxBB
 * Based on code by Rickard Andersson copyright (C) 2002-2008 PunBB
 * License under GPLv3
 */

// Tell header.php to use the help template
define('FORUM_HELP', 1);

define('FORUM_ROOT', dirname(__FILE__).'/');
require FORUM_ROOT.'include/common.php';


if ($luna_user['g_read_board'] == '0')
	message($lang['No view'], false, '403 Forbidden');

$page_title = array(luna_htmlspecialchars($luna_config['o_board_title']), $lang['Help']);
define('FORUM_ACTIVE_PAGE', 'help');
require FORUM_ROOT.'header.php';

require FORUM_ROOT.'templates/help.tpl.php';