<?php
/*
 * Project:     EQdkp-Plus
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2009-07-16 19:19:51 +0900 (목, 16 7 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: hoofy_leon $
 * @copyright   2006-2008 Corgan - Stefan Knaak | Wallenium & the EQdkp-Plus Developer Team
 * @link        http://eqdkp-plus.com
 * @package     eqdkp-plus
 * @version     $Rev: 5271 $
 *
 * $Id: english.php 5271 2009-07-16 10:19:51Z hoofy_leon $
 */

if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

$plang = array_merge($plang, array(
	'offi_conf' => 'Officer Conference - Topics',
	'pk_oc_day'	=> 'Day of Officer Conference',
	'pk_oc_end_time' => 'wanted end of officer conference (HH:MM)',
	'pk_oc_start_time' => 'wanted begin of officer conference (HH:MM)',
	'pk_oc_time_type' => 'Define start or end of officer conference?',
	'oc_add_topic' => 'Add Topic',
	'oc_upd_topic' => 'Edit Topic',
	'oc_next_topics' => 'Next Topics',
	'oc_topic_name' => 'Name',
	'oc_topic_time' => 'Time to talk (min)',
	'oc_topic_posi' => 'Sorting',
	'oc_topic_desc' => 'Description',
	'oc_save' => 'Save',
	'oc_delete' => 'Delete',
	'oc_save_success' => 'Saving successful!',
	'oc_save_no_success' => 'Saving not successful!',
	'oc_delete_success' => 'Deletion successful!',
	'oc_delete_no_success' => 'Deletion not successful!',
	'oc_no_name' => 'No Name',
	'oc_no_desc' => 'No Description',
	'oc_creator' => 'created by:',
	'oc_min' => 'min',
	'oc_next_oc' => 'Next Officer Conference',
    'oc_monday' => 'Monday',
    'oc_tuesday' => 'Tuesday',
	'oc_wednesday' => 'Wednesday',
	'oc_thursday' => 'Thursday',
	'oc_friday' => 'Friday',
	'oc_saturday' => 'Saturday',
	'oc_sunday' => 'Sunday',
	'oc_start' => 'Begin',
  	'oc_end' => 'End',
));
?>