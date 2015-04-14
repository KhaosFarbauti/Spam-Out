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
class spamoutClass
{
	public static function kickspamout($core)
	{
		$list_rbl = explode(",", $core->blog->settings->spamout->spamout_rbl);
		if (!$list_rbl) {
			$list_rbl = array();
		}
		$nb=sizeof($list_rbl);

		$host = $_SERVER['REMOTE_ADDR'];
		$rev = array_reverse(explode('.', $host));
	
		for ($i = 0; $i < $nb; $i++ ){
			if (strlen($list_rbl[$i]) > 4){
				$lookup = implode('.', $rev) . '.' . $list_rbl[$i];
				if ($lookup != gethostbyname($lookup)) {
				    die("spam");
				}
			}
		}
	}
}
?>
