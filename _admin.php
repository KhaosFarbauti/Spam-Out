<?php
#   Copyright 2015 Khaos Farbauti Ibn Oblivion
#
#   Licensed under the Apache License, Version 2.0 (the "License");
#   you may not use this file except in compliance with the License.
#   You may obtain a copy of the License at
#
#       http://www.apache.org/licenses/LICENSE-2.0
#
#   Unless required by applicable law or agreed to in writing, software
#   distributed under the License is distributed on an "AS IS" BASIS,
#   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
#   See the License for the specific language governing permissions and
#   limitations under the License.

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
