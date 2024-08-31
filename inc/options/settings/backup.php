<?php 

   // backup option
   CSF::createSection( 'lunax_settings', array(
           
    'title'  => esc_html__( 'Backup Options', 'lunax-essential' ),
    'icon'   => 'fa fa-share-square-o',
    'fields' => array(
        array(
            'id'    => 'backup_options',
            'type'  => 'backup',
            'title' => esc_html__( 'Backup Your All Options', 'lunax-essential' ),
            'desc'  => esc_html__( 'If you want to take backup your option you can backup here.', 'lunax-essential' ),
        ),
    ),
) );