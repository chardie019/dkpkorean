<?php
/*
+---------------------------------------------------------------+
|       Itemstats FR Core by Yahourt
|		modded by Corgan for EQdkp Plus
|		Add WoWHead & Armory Support
|
|		$Id: config.php 5385 2009-07-30 01:15:57Z crezol $
+---------------------------------------------------------------+
*/
// Change this to true and edit the lines below
// if you want to use itemstats in other aplications
// than EQDKP PLUS
$use_own_vars = false;

if ($use_own_vars == true)
{
	// EDIT IF USE_OWN_VARS == TRUE
	// The location and extension type for the Icon store.
	define('ICON_STORE_LOCATION', 'http://wowdata.buffed.de/img/icons/wow/32/');
	define('ICON_EXTENSION', '.png');

	// Database config

	#insert the Variables instead of the Strings - Corgan
	define('dbhost', 'Insert Hostname');
	define('dbname', 'Insert Database name');
	define('dbuser', 'Insert DB Username');
	define('dbpass', 'Insert DB User Password');
}else
{
  if(!isset($dbhost)){
    if(is_file('../config.php')){
      require('../config.php');
    }else{
      require('../../config.php');
    }
  }
	define('dbhost', $dbhost);
	define('dbname', $dbname);
	define('dbuser', $dbuser);
	define('dbpass', $dbpass);
}

define('item_cache_table', 'item_cache');

?>