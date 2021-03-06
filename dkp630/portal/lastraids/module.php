<?php
/*
 * Project:     EQdkp-Plus
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2008-08-02 14:44:02 +0200 (Sa, 02 Aug 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: osr-corgan $
 * @copyright   2006-2008 Corgan - Stefan Knaak | Wallenium & the EQdkp-Plus Developer Team
 * @link        http://eqdkp-plus.com
 * @package     eqdkp-plus
 * @version     $Rev: 2476 $
 * 
 * $Id: module.php 2476 2008-08-02 12:44:02Z osr-corgan $
 */

if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

$portal_module['lastraids'] = array(
			'name'			    => 'LastRaids Module',
			'path'			    => 'lastraids',
			'version'		    => '1.0.0',
			'author'        	=> 'Corgan',
			'contact'		    => 'http://www.eqdkp-plus.com',
			'description'   	=> 'Information on last raids',
			'positions'     	=> array('left1', 'left2', 'right'),
      		'install'       	=> array(
                            			'autoenable'        => '1',
			                            'defaultposition'   => 'right',
			                            'defaultnumber'     => '3',),
    		);

$portal_settings['lastraids'] = array(
  'pk_last_raids_limit'     => array(
        'name'      => 'pk_last_raids_limit',
        'language'  => 'pk_last_raids_limit',
        'property'  => 'text',
        'size'      => '2',
        'help'      => 'pk_help_nextraids_limit'
      ),
  'pk_set_lastraids_showloot'     => array(
        'name'      => 'pk_set_lastraids_showloot',
        'language'  => 'pk_set_lastraids_showloot',
        'property'  => 'checkbox',
        'size'      => false,
        'options'   => false,
        'help'      => 'pk_help_lastitems_deactive'
      ),
  'pk_lastraids_lootLimit'     => array(
        'name'      => 'pk_lastraids_lootLimit',
        'language'  => 'pk_lastraids_lootLimit',
        'property'  => 'text',
        'size'      => '2',
        'help'      => 'pk_help_lastitems_limit'
      ),
);

if(!function_exists(lastraids_module))
{
	function lastraids_module()
  	{
  		global $eqdkp_root_path , $user, $eqdkp,$tpl,$conf_plus,$html, $plang,$conf_plus;

		include_once($eqdkp_root_path.'pluskernel/bridge/bridge_class.php');
		$br = new eqdkp_bridge();

		$limit = ($conf_plus['pk_last_raids_limit'] > 0)  ? $conf_plus['pk_last_raids_limit'] : 5 ;
		$lastraids= $br->get_last_Group_Raids($limit);

		if (is_array($lastraids))
		{
			$out = '<table width="100%" border="0" cellspacing="1" cellpadding="2" class="noborder">';

			foreach ($lastraids as $raid)
			{
				//Items
				if (!$conf_plus['pk_set_lastraids_showloot'])
				{
					$item_icons = "";
					$loot_limit = ($conf_plus['pk_lastraids_lootLimit'] > 0) ? $conf_plus['pk_lastraids_lootLimit'] : 7 ;
					$raid_items = $br->get_last_items($loot_limit,$raid['raid_id']);
					
					if (is_array($raid_items))
					{
						foreach($raid_items as $item)
						{
							$item_icons .=  "<a href=".$eqdkp_root_path."viewitem.php?i=".$item['id'].">". $html->itemstats_item(stripslashes($item['name']),false,true)."</a>" ;										
							$item_icons .= ($conf_plus['pk_itemstats'] == 1 ) ? '' : ' | ' ;							
						}
					}
				}

				$img = $eqdkp_root_path."games/".$eqdkp->config['default_game']."/events/".$raid['raid_icon'];
				$img = (file_exists($img)) ? "<img src=".$img.">" : "" ;

				$class = $eqdkp->switch_row_class();
				$out .= '<tr class="'.$class.'" nowrap onmouseover="this.className=\'rowHover\';" onmouseout="this.className=\''.$class.'\';">'.
							"<td>
								<table>
									<tr>
										<td valign=top>
											<a href='".$eqdkp_root_path."viewraid.php?r=". $raid['raid_id']."'>
											".$img."</a>
											</a>
										</td>
										<td valign=top>
											<a href='".$eqdkp_root_path."viewraid.php?r=". $raid['raid_id']."'>
											".$raid['raid_name']."</a><br>".
											strftime($user->style['strtime_date_short'], $raid['raid_date']).
											"<p><span class=small> ".$raid['raid_note']."</span><br>".
											$item_icons.
										"</td>
									</tr>
								</table>
							</td>
						</tr>";
			}
			$out .= '</table>';
		}

		return $out;
  }
}
?>
