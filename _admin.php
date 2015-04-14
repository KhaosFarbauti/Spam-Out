<?php
# -- BEGIN LICENSE BLOCK ----------------------------------
#
# This file is part of Spam Out, a plugin for DotClear2.
#
# Copyright (c) 2008 Khaos Farbauti Ibn Oblivion and contributors
# Licensed under the GPL version 2.0 license.
# See LICENSE file or
# http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
#
# -- END LICENSE BLOCK ------------------------------------
if (!defined('DC_CONTEXT_ADMIN')) { return; }

$_menu['Blog']->addItem('SpamOut','plugin.php?p=spamout','index.php?pf=spamout/icon.png',
		preg_match('/plugin.php\?p=spamout(&.*)?$/',$_SERVER['REQUEST_URI']),
		$core->auth->check('admin',$core->blog->id));
		
$core->addBehavior('adminDashboardFavorites','spamoutDashboardFavorites');

function spamoutDashboardFavorites($core,$favs)
{
	$favs->register('spamout', array(
		'title' => __('SpamOut'),
		'url' => 'plugin.php?p=spamout',
		'small-icon' => 'index.php?pf=spamout/icon.png',
		'large-icon' => 'index.php?pf=spamout/icon-big.png',
		'permissions' => 'admin')
	);
}
?>