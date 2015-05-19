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

if (!defined('DC_RC_PATH')) { return; }
 
$this->registerModule(
  /* Name */           "SpamOut",
  /* Description*/     "Ban spammers in your blog using RBL",
  /* Author */         "Khaos Farbauti Ibn Oblivion",
  /* Version */        '1.5',
	/* Properties */
	array(
		'permissions' => 'usage,contentadmin',
		'type' => 'plugin',
		'dc_min' => '2.6',
		'support' => 'http://blog.chaosklub.com/post/2013/08/23/Spam-Out,-nouveau-plugin-pour-Dotclear-2',
		'details' => 'http://plugins.dotaddict.org/dc2/details/spamout'
		)
);
?>
