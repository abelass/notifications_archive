<?php
/**
 * Utilisations de pipelines par Archive notifications
 *
 * @plugin     Archive notifications
 * @copyright  2014
 * @author     Rainer
 * @licence    GNU/GPL
 * @package    SPIP\Notifications_archive\genie
 */

if (!defined('_ECRIRE_INC_VERSION')) return;
    

function genie_eliminer_notifications_dist ($t) {
 
    include_spip('inc/config');
    $config=lire_config('notifications_archive',array());
    
    foreach($config AS $notification=>$options){
        $interval=$options['duree']*24*3600;
       spip_log("$interval",'notifications_archive');
        $mydate = sql_quote(date("Y-m-d H:i:s", time() - $interval));   
        
        spip_log("genie pour $notification <:  $mydate ",'notifications_archive');         
        sql_delete('spip_notifications', 'type='.sql_quote($notification).' AND date < '.$mydate);
    }
    return 1;
}


?>