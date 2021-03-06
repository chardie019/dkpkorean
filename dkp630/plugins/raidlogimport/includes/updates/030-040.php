<?php
 /*
 * Project:     EQdkp-Plus Raidlogimport
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2009-05-07 17:52:03 +0200 (Do, 07 Mai 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: hoofy_leon $
 * @copyright   2008-2009 hoofy_leon
 * @link        http://eqdkp-plus.com
 * @package     raidlogimport
 * @version     $Rev: 4786 $
 *
 * $Id: 030-040.php 4786 2009-05-07 15:52:03Z hoofy_leon $
 */

if(!defined('EQDKP_INC'))
{
	header('HTTP/1.0 404 Not Found');
	exit;
}

$new_version    = '0.4.0';
$updateFunction = false;

$updateDESC = array(
	'',
	'Added Config Value: MultiDKP-Support',
	'Added Config Value: Adjustment-Parse',
	'Added Config Value: Boss/Zone-Parse'
);
$reloadSETT = 'settings.php';

$updateSQL = array(
	"INSERT INTO __raidlogimport_config (config_name, config_value) VALUES ('conf_adjustment', '".$conf_plus['pk_multidkp']."');",
	"INSERT INTO __raidlogimport_config (config_name, config_value) VALUES ('adj_parse', ': ');",
	"INSERT INTO __raidlogimport_config (config_name, config_value) VALUES ('bz_parse', ',');",
);

?>
