<?php
/**
 * Fonctions utiles au plugin Archive notifications
 *
 * @plugin     Archive notifications
 * @copyright  2014
 * @author     Rainer
 * @licence    GNU/GPL
 * @package    SPIP\Notifications_archive\Inc
 */

if (!defined('_ECRIRE_INC_VERSION')) return;

function inc_archiver_notification_dist($email, $subject, $o){
    set_request('recipents',$email);
    set_request('sujet',$subject); 
    foreach($o AS $champ=>$valeur){
        set_request($champ,$valeur);
    }

    formulaires_editer_objet_traiter('notification','new');


}

?>