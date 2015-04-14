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
if (!defined('DC_RC_PATH')) { return; }
 
$this->registerModule(
  /* Name */           "Spam Out",
  /* Description*/     "Interdire les spammeurs sur votre blog à l'aide de RBL",
  /* Author */         "Khaos Farbauti Ibn Oblivion",
  /* Version */        '1.2',
	/* Permissions */		 'usage,contentadmin'
);
?>
