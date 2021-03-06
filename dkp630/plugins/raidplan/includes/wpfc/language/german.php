<?php
 /*
 * Project:     EQdkp Plugin WPFC Classes
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2005
 * Date:        $Date: 2008-10-04 19:26:15 +0200 (Sa, 04 Okt 2008) $
 * ----------------------------------------------------------------------- 
 * This Class is part of the "WalleniuMs Plugin (Developer) Framework Kit" WPFC. 
 * You can ask for permission and use this classes in your Plugins but not 
 * remove this Copyright  
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2007-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     wpfc
 * @version     $Rev: 2772 $
 * 
 * $Id: german.php 2772 2008-10-04 17:26:15Z wallenium $
 */

if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

// Initialize the language array if it isn't already
if (empty($lang) || !is_array($lang)){
    $lang = array();
}

// %1\$<type> prevents a possible error in strings caused
//      by another language re-ordering the variables
// $s is a string, $d is an integer, $f is a float

$lang = array_merge($lang, array(
    'ucc_shortlangtag'                => 'de',
    
    // Update Check
    'ucc_update_box'									=> 'Neue Version verf�gbar',
    'ucc_changelog_url'								=> 'Changelog',
    'ucc_updated_date'								=> 'Ver�ffentlicht am',
    'ucc_timeformat'									=> 'd.m.Y',
    'ucc_release_level'								=> 'Releaseart',
    'ucc_noserver'               			=> 'Beim Versuch den Updateserver zu kontaktieren trat ein Fehler auf. Entweder dein Host erlaubt keine ausgehenden
                                          Verbindungen, oder es bestehen Netzwerkprobleme. Bitte besuche das EQDKP Plugin Forum um sicherzustellen, dass du die neuste Version am laufen hast.',
    'ucc_update_available_p0'    			=> 'Bitte aktualisiere das installierte ',
    'ucc_update_available_p1'					=> 'Plugin.',
    'ucc_update_available_p2'    			=> 'Deine installierte Version ist',
    'ucc_update_available_p3'    			=> 'und die aktuellste Version ist',
    'ucc_update_url'             			=> 'Zur Downloadseite',
    
    // Plugin Updater Class
    'puc_update_txt'                  => "%1\$s auf %2\$s",
    'puc_update_box'									=> 'Datenbankupdate notwendig',
    'puc_upd_txt1'										=> 'Die vorhandene Datenbank ( Version ',
    'puc_upd_txt2'										=> ' ) passt nicht zur installierten Plugin Version ',
    'puc_upd_txt3'										=> '. Bitte benutzen Sie den Update-Button um die Datenbank automatisch zu aktualisieren',
    'puc_upd_bttn'										=> 'Datenbank aktualisieren',
    'puc_upd_unknown'									=> '[Version unbekannt]',
    'puc_upd_no_file'									=> 'Es wurde keine Updatedatei gefunden',
    'puc_upd_glob_error'							=> 'Beim update ist ein Fehler aufgetreten.',
    'puc_upd_ok'											=> 'Die Datenbank wurde erfolgreich aktualsiert',
    'puc_upd_step'										=> 'Schritt',
    'puc_upd_step_ok'									=> 'Erfolgreich',
    'puc_upd_step_false'							=> 'Fehlgeschlagen',
    'puc_upd_stp_unknwn'							=> '[Unbekannt]',
    
    // Plugin Update Warn Class
    'wpfc_perform_intro'						  => 'Es sind m�glicherweise nicht alle Tabellen�nderungen beim letzten Update ausgef�hrt worden. Klicke den "beheben" Link um die Tabelle zu �berpr�fen. N�tige �ndrerungen werden dann angezeigt. Folgende Plugintabellen sind betroffen:',
    'wpfc_pluginneedupdate'						=> "%1\$s: (Datenbankversion: %2\$s -> Installiert: %3\$s)",
    'wpfc_solve_dbissues'             => 'beheben',
    'wpfc_unknown'                    => '[Unbekannt]',
    
    // jQuery
    'wpfc_bttn_ok'                    => 'Ok',
    'wpfc_bttn_cancel'                => 'Abbrechen',
    
    'wpfc_on'                         => 'Ein',
    'wpfc_off'                        => 'Aus',
));
?>
