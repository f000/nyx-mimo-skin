<?php

/***************************************************************************
*
* This script is part of MIMO.cz V2 skin - reincarnation of legendary
* MIMO.cz skin originally created by EMBRYO @ nyx.cz
*
* Title:		skin index
* Project:		MIMO.cz V2 skin for nyx.cz
* Author:		F0B1C @ nyx
* Modified:     2009-01-23
*
***************************************************************************/


define('TITLE','9pt variant');
define('URL','http://www.hyperware.net/nyx/skin/mimo-f0b1c-mod-v2-9');

echo str_replace('###PLACEHOLDER_TITLE###',TITLE,str_replace('###PLACEHOLDER_URL###',URL,file_get_contents('../mimo-f0b1c-mod-v2-shared/index.tpl')));

?>