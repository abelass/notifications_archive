
<?php



// Sécurité
if (!defined('_ECRIRE_INC_VERSION')) return;

function formulaires_configurer_notifications_archive_saisies_dist(){

    $notifications=charger_fonction('notifications_archiver','inc',true);
    $notifications=$notifications();
   

    $saisies=array();
    $n=0;
    foreach($notifications AS $notification=>$options){
        $n++;
        $saisies[$n]=array(       
                'saisie'=>'checkbox',
                'options'=>array(
                    'nom' => $notification.'[activer]',
                    'datas'=>array('oui'=>'oui'),
                    'defaut'=>$options['activer'],
                    'label' => _T('notifications_archive:label_activer',array('notification'=>$notification))                                  
                     ),
                 );  
         $n++;              
         $saisies[$n]=array(                      
                  'saisie'=>'input',
                   'options'=>array(
                        'nom' => $notification.'[duree]',
                        'defaut'=>$options['duree'],
                        'label' => _T('notifications_archive:label duree'),                             
                         ),               
            );       
    }
    
	return array(
		array(
			'saisie' => 'fieldset',
			'options' => array(
				'nom' => 'fieldset_parametres',
				'label' => _T('reservation_evenement:cfg_titre_parametrages')
			),
            'saisies' => $saisies 
         )       		
	);
}

?>