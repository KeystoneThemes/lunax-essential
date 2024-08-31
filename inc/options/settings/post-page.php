<?php 
 

 // Post Page
CSF::createSection( LUNAX_OPTION_KEY, array(
    'icon'   => 'fa fa-book',
    'title' => esc_html__( 'Post & Page', 'lunax-essential' ),
    'fields' => array(

        array(
          'type'    => 'subheading',
          'content' => esc_html__( 'Post Setting', 'lunax-essential' ),
        ),        
        
        array(
            'id'      => 'single_post_tags',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Enable Post tags', 'lunax-essential' ),
            'desc'    => esc_html__( 'If you want to enable or disable single post tags you can set ( YES / NO )', 'lunax-essential' ),
            'default' => true,
        ),

        array(
            'id'      => 'blog_single_author_box',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Blog Author About', 'lunax-essential' ),
            'default' => false
        ),
        
        array(
            'id'            => 'blog_post_preset_grp',
            'type'          => 'tabbed',
            'title'         => esc_html__('Preset','lunax-essential'),
            'tabs'          => array(
              array(
                'title'     => 'Post Single',
                'icon'      => 'fas fa-warehouse',
                'fields'    => array(
                    
                    array(
                        'id'        => 'post_layout',
                        'type'      => 'image_select',
                        'title'     => esc_html__('Layout','lunax-essential'),
                        'options'   => array(
                          'default' => LUNAX_ESSENTIAL_ASSETS_URL . 'images/patterns/default.svg',
                          'health-one' => LUNAX_ESSENTIAL_ASSETS_URL . 'images/patterns/layout-1.svg',
                          'athlete' => LUNAX_ESSENTIAL_ASSETS_URL . 'images/patterns/layout-2.svg',
                        ),
                        'default'   => 'default',
                    ),
            
                    array(
                        'id'      => 'preset_blog_banner',
                        'type'    => 'switcher',
                        'title'   => esc_html__( 'Banner', 'lunax-essential' ),
                        'default' => false,
                        'dependency' => array( 'post_layout', 'any', 'health-one,athlete' )
                    ), 
                    
                    array(
                        'id'      => 'preset_blog_view',
                        'type'    => 'switcher',
                        'title'   => esc_html__( 'View', 'lunax-essential' ),
                        'default' => false,
                        'dependency' => array( 'post_layout', 'any', 'health-one,athlete' )
                    ),
                    
                    array(
                        'id'      => 'preset_blog_sidebar',
                        'type'    => 'switcher',
                        'title'   => esc_html__( 'Sidebar', 'lunax-essential' ),
                        'default' => false,
                        'dependency' => array( 'post_layout', 'any', 'health-one,athlete' )
                    ),
                    
                    array(
                        'type'     => 'callback',
                        'function' => 'lunax_elementor_post_single_layout_json',
                        'dependency' => array( 'post_layout', '==', 'elementor_builder' )
                    )
                    
                )
              ),           
            )
          ),
          
          


    ),
) );

