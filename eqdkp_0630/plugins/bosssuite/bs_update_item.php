<?php
 /*
 * Project:     BossSuite v4 MGS
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2008-12-19 02:49:23 +0100 (Fr, 19 Dez 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: sz3 $
 * @copyright   2006-2008 sz3
 * @link        http://eqdkp-plus.com
 * @package     bosssuite
 * @version     $Rev: 3452 $
 *
 * $Id: bs_update_item.php 3452 2008-12-19 01:49:23Z sz3 $
 */

define('EQDKP_INC', true);
define('PLUGIN', 'bosssuite');

$eqdkp_root_path = './../../';
include_once ($eqdkp_root_path . 'common.php');
include_once($eqdkp_root_path . 'itemstats/eqdkp_itemstats.php');

$user->check_auth('u_bosssuite_bp_view');

if ( !$pm->check(PLUGIN_INSTALLED, 'bosssuite') )
{
	message_die('BossSuite plugin not installed.');
}

if (isset($_GET['item'])){
  $item = stripslashes(urldecode($_GET['item']));
  $bs_item_out = itemstats_get_html($item);
} else {
  $bs_item_out = "No item!";
}
//Framework include
include_once($eqdkp_root_path . 'plugins/bosssuite/include/libloader.inc.php');

# Assign Vars
####################################################
$tpl->assign_vars(array (
  'L_ITEMNAME' => $user->lang['bs_updateitem_l_name'],
  'ITEM_NAME' => $item,
	'ITEM_OUT' => $bs_item_out,
	'JS_ABOUT' => $jquery->Dialog_URL('About', $user->lang['bs_about_header'], 'about.php', '500', '600'),
	'L_CREDITS' => $user->lang['bs_credits_p1'].$pm->get_data('bosssuite', 'version').$user->lang['bs_credits_p2'],
	'BS_INFO_IMG' => 'images/credits/info.png',
));

$eqdkp->set_vars(array (
	'page_title'    => sprintf($user->lang['title_prefix'], $eqdkp->config['guildtag'], $eqdkp->config['dkp_name']).': '.$user->lang['is_title_bossprogress'],
	'template_path' => $pm->get_data('bosssuite', 'template_path'),
	'template_file' => 'bossitem.html',
	'display' => true)
	);
	
?>
