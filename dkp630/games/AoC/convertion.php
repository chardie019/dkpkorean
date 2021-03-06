<?php
/******************************
 * EQdkp
 * Copyright 2002-2003
 * Licensed under the GNU GPL.  See COPYING for full terms.
 * ------------------
 * DAoC.php
 * Began: Fri May 13 2005
 *
 * $Id: convertion.php 3575 2009-01-14 11:12:58Z wallenium $
 *
 ******************************/

if ( !defined('EQDKP_INC') )
{
    header('HTTP/1.0 404 Not Found');
    exit;
}

// Convert the Classnames to english
$classconvert_array = array(
  'german'  => array(
        "Assassin"          => "Assassin",
        "Barbar"            => "Barbarian",
        "Waldläufer"        => "Ranger",
        
        "Eroberer"          => "Conqueror",
        "Wächter"           => "Guardian",
        "Dunkler Templer"   => "Dark Templar",
        
        "Dämonologe"        => "Demonologist",
        "Herold des Xotli"  => "Herald of Xotli",
        "Nekromant"         => "Necromancer",
        
        "Mitrapriester"     => "Priest of Mitra",
        "Bärenschamane"     => "Bear Shaman",
        "Vollstrecker Sets" => "Tempest of Set",
  )
);

?>
