<?php 

CSF::createSection( LUNAX_OPTION_KEY, array(
        'icon'   => 'fa fa-book',
        'title'  => esc_html__( 'General','lunax-essential'),
        'fields' => array(

            array(
                'id'      => 'breadcrumb_enable',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Breadcrumb', 'lunax-essential' ),
                'default' => true
            ), 

            array(
                'id'         => 'general_breadcrumb_limit',
                'type'       => 'number',
                'title'      => esc_html__( 'Breadcrumb limit', 'lunax-essential' ),
                'desc'       => esc_html__( 'Set the breadcrump text limit', 'lunax-essential' ),
                'default'    => '50',
            ),
            
            array(
                'id'      => 'general_full_site_background',
                'type'    => 'switcher',
                'title'   => esc_html__( 'FullSite Background Pattern', 'lunax-essential' ),
                'default' => false
            ), 
            
            array(
                'id'        => 'general_fullsite_background_preset',
                'type'      => 'image_select',
                'title'     => esc_html__('Background Pattern Select','lunax-essential'),
                'options'   => LUNAX_ESSENTIAL_get_background_patterns(),
                'dependency' => array( 'general_full_site_background', '==', 'true' ),
                'default'   => '',                
            ),

            array(
                'id'        => 'general_full_site_custom_background',
                'type'      => 'media',
                'preview'   => false,
                'library'   => 'image',
                'dependency' => array( 'general_fullsite_background_preset|general_full_site_background','==|==','custom|true' ),
                'title'     => esc_html__('Custom Background Pattern','lunax-essential'),
            ),
            
            array(
                'id'     => 'general_custom_post_type',
                'type'   => 'repeater',
                'title'  => esc_html__('Post Types','lunax-essential'),
                'fields' => array(
                
                    array(
                        'id'           => 'cpt',
                        'type'         => 'select',
                        'title'        => esc_html__('Select an post type','lunax-essential'),
                        'placeholder'  => esc_html__('Select an post type','lunax-essential'),
                        'options'      => lunax_get_cache_post_types()
                    ),
                      
                    array(
                        'id'           => 'cpt_primary_tax',
                        'type'         => 'select',
                        'title'        => esc_html__('Select Primary Taxonomy','lunax-essential'),
                        'placeholder'  => esc_html__('Select Primary Taxonomy','lunax-essential'),
                        'options'      => lunax_get_cache_tax_types()
                    )
                ),
            ),
            
            array(
                'id'      => 'theme_demo_activate',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Activate Theme Demo', 'lunax-essential' ),
                'default' => true,               
            ), 
              
       
        )
    ) ); 