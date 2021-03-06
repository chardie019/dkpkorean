<?php
/*
 * Project:     EQdkp Shoutbox
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:        http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2008-11-09 18:05:54 +0100 (So, 09 Nov 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: osr-corgan $
 * @copyright   2008 Aderyn
 * @link        http://eqdkp-plus.com
 * @package     shoutbox
 * @version     $Rev: 3069 $
 *
 * $Id: config.php 3069 2008-11-09 17:05:54Z osr-corgan $
 */

if (!defined('EQDKP_INC'))
{
  header('HTTP/1.0 404 Not Found');exit;
}

// Config Values
$config_vars = array(
    'sb_inst_version'   => $this->version,      # Save the version for Autoupdate?
    'sb_updatecheck'    => '1',                 # Enable UpdateCheck?
);

?>
