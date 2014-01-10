<?php

/**
 *  Fichier généré par la Fabrique de plugin v5
 *   le 2014-01-10 17:36:02
 *
 *  Ce fichier de sauvegarde peut servir à recréer
 *  votre plugin avec le plugin «Fabrique» qui a servi à le créer.
 *
 *  Bien évidemment, les modifications apportées ultérieurement
 *  par vos soins dans le code de ce plugin généré
 *  NE SERONT PAS connues du plugin «Fabrique» et ne pourront pas
 *  être recréées par lui !
 *
 *  La «Fabrique» ne pourra que régénerer le code de base du plugin
 *  avec les informations dont il dispose.
 *
**/

if (!defined("_ECRIRE_INC_VERSION")) return;

$data = array (
  'fabrique' => 
  array (
    'version' => 5,
  ),
  'paquet' => 
  array (
    'nom' => 'Archive notifications',
    'slogan' => 'Garder un trace des notifications envoyés par spip',
    'description' => 'Garder un trace des notifications envoyés par spip',
    'prefixe' => 'notifications_archive',
    'version' => '1.0.0',
    'auteur' => 'Rainer',
    'auteur_lien' => '',
    'licence' => 'GNU/GPL',
    'categorie' => 'communication',
    'etat' => 'dev',
    'compatibilite' => '[3.0.13;3.0.*]',
    'documentation' => '',
    'administrations' => 'on',
    'schema' => '1.0.0',
    'formulaire_config' => 'on',
    'formulaire_config_titre' => 'Paramêtres Plugin Archive Notifications',
    'fichiers' => 
    array (
      0 => 'fonctions',
      1 => 'pipelines',
    ),
    'inserer' => 
    array (
      'paquet' => '',
      'administrations' => 
      array (
        'maj' => '',
        'desinstallation' => '',
        'fin' => '',
      ),
      'base' => 
      array (
        'tables' => 
        array (
          'fin' => '',
        ),
      ),
    ),
    'scripts' => 
    array (
      'pre_copie' => '',
      'post_creation' => '',
    ),
    'exemples' => 'on',
  ),
  'objets' => 
  array (
    0 => 
    array (
      'nom' => 'Notifications',
      'nom_singulier' => 'Notifications',
      'genre' => 'feminin',
      'logo_variantes' => '',
      'table' => 'notifications',
      'cle_primaire' => 'id_notification',
      'cle_primaire_sql' => 'bigint(21) NOT NULL',
      'table_type' => 'notification',
      'champs' => 
      array (
        0 => 
        array (
          'nom' => 'Sujet',
          'champ' => 'sujet',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'recherche' => '8',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
        1 => 
        array (
          'nom' => 'Texte',
          'champ' => 'texte',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'recherche' => '6',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
        2 => 
        array (
          'nom' => 'Type',
          'champ' => 'type',
          'sql' => 'varchar(50) NOT NULL DEFAULT \'\'',
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
        3 => 
        array (
          'nom' => 'Récipients',
          'champ' => 'recipients',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
        4 => 
        array (
          'nom' => 'Id Objet',
          'champ' => 'id_objet',
          'sql' => 'int(11) NOT NULL DEFAULT 0',
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
        5 => 
        array (
          'nom' => 'Objet',
          'champ' => 'objet',
          'sql' => 'varchar(50) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
      ),
      'champ_titre' => 'sujet',
      'champ_date' => 'date',
      'statut' => '',
      'chaines' => 
      array (
        'titre_objets' => 'Notifications',
        'titre_objet' => 'Notifications',
        'info_aucun_objet' => 'Aucune notifications',
        'info_1_objet' => 'Une notifications',
        'info_nb_objets' => '@nb@ notifications',
        'icone_creer_objet' => 'Créer une notifications',
        'icone_modifier_objet' => 'Modifier cette notifications',
        'titre_logo_objet' => 'Logo de cette notifications',
        'titre_langue_objet' => 'Langue de cette notifications',
        'titre_objets_rubrique' => 'Notifications de la rubrique',
        'info_objets_auteur' => 'Les notifications de cet auteur',
        'retirer_lien_objet' => 'Retirer cette notifications',
        'retirer_tous_liens_objets' => 'Retirer toutes les notifications',
        'ajouter_lien_objet' => 'Ajouter cette notifications',
        'texte_ajouter_objet' => 'Ajouter une notifications',
        'texte_creer_associer_objet' => 'Créer et associer une notifications',
        'texte_changer_statut_objet' => 'Cette notifications est :',
      ),
      'table_liens' => '',
      'roles' => '',
      'auteurs_liens' => '',
      'vue_auteurs_liens' => '',
      'echafaudages' => 
      array (
        0 => 'prive/squelettes/contenu/objets.html',
        1 => 'prive/squelettes/contenu/objet.html',
      ),
      'autorisations' => 
      array (
        'objet_creer' => '',
        'objet_voir' => '',
        'objet_modifier' => '',
        'objet_supprimer' => '',
        'associerobjet' => '',
      ),
      'boutons' => 
      array (
        0 => 'menu_edition',
      ),
    ),
  ),
  'images' => 
  array (
    'paquet' => 
    array (
      'logo' => 
      array (
        0 => 
        array (
          'extension' => 'png',
          'contenu' => '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',
        ),
      ),
    ),
    'objets' => 
    array (
      0 => 
      array (
      ),
    ),
  ),
);

?>