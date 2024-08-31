<?php

CSF::createSection( LUNAX_OPTION_KEY, array(
    'id'    => 'cpt_tab',                         // Set a unique slug-like ID
    'title' => esc_html__( 'CPT & Taxonomy', 'lunax-essential' ),
    'icon'  => 'fa fa-cog',
) ); 

CSF::createSection( 'lunax_settings', array(
    'parent' => 'cpt_tab', // The slug id of the parent section
    'title'  => esc_html__( 'Settings', 'lunax-essential' ),
    'icon'   => 'fa fa-share-alt',
    'fields' => array(     
         
        array(
            'id'     => 'cpt_options',
            'type'   => 'repeater',
            'title'  => esc_html__('Custom Post Type','lunax-essential'),
            'fields' => array(
          
                array(
                    'id'      => 'posttype',
                    'type'    => 'text',
                    'title'   => esc_html__( 'Post Type (Unique)', 'lunax-essential' ),                   
                ),
                
                array(
                    'id'      => 'singular_name',
                    'type'    => 'text',
                    'title'   => esc_html__( 'Singular Name', 'lunax-essential' ),                   
                ),
                
                array(
                    'id'      => 'plural_name',
                    'type'    => 'text',
                    'title'   => esc_html__( 'Plural Name', 'lunax-essential' ),                   
                ),
                 
                array(
                    'id'      => 'slug',
                    'type'    => 'text',
                    'title'   => esc_html__( 'Front Slug', 'lunax-essential' ),                   
                ),
                
                array(
                    'id'          => 'supports',
                    'type'        => 'select',
                    'title'       => esc_html__('Select Supports','lunax-essential'),
                    'chosen'      => true,
                    'multiple'    => true,
                    'placeholder' => esc_html__('Select an option','lunax-essential'),
                    'options'     => array(
                        'title' => 'Title', 
                        'editor' => 'Editor',
                        'author' => 'Author',
                        'thumbnail' => 'Thumbnail',
                        'excerpt' => 'Excerpt',
                        'comments' => 'Comments'
                    ),
                    'default'     => 'title'
                ),                  
                
                array(
                    'id'         => 'exclude_from_search',
                    'type'       => 'switcher',
                    'title'      => esc_html__('Exclude From Search?','lunax-essential'),
                    'default'    => false
                ),
                
                array(
                    'id'         => 'has_archive',
                    'type'       => 'switcher',
                    'title'      => esc_html__('Has Archive?','lunax-essential'),
                    'default'    => false
                ),
                
                array(
                    'id'         => 'publicly_queryable',
                    'type'       => 'switcher',
                    'title'      => esc_html__('Publicly Queryable?','lunax-essential'),
                    'default'    => false
                ),
             
                array(
                    'id'         => 'show_in_menu',
                    'type'       => 'switcher',
                    'title'      => esc_html__('Show in admin menu?','lunax-essential'),
                    'default'    => true
                ),               
                array(
                    'id'      => 'icon',
                    'type'    => 'media',
                    'title' => esc_html__('Nav Icon','lunax-essential'),
                    'library' => 'image',
                    'preview' => true
                  ),
                array(
                    'id'         => 'show_in_nav_menus',
                    'type'       => 'switcher',
                    'title'      => esc_html__('Show in nav menus?','lunax-essential'),
                    'default'    => false
                ), 
          
            ),
          ),
          array(
            'type'    => 'heading',
            'content' => esc_html__('Custom Taxonomy','lunax-essential'),
          ),
          
          array(
            'id'     => 'cpt_taxonomy_options',
            'type'   => 'repeater',
            'title'  => esc_html__('Custom Taxonomy Type','lunax-essential'),
            'fields' => array(
          
                array(
                    'id'      => 'taxonomy_name',
                    'type'    => 'text',
                    'title'   => esc_html__( 'Taxonomy Name (Unique)', 'lunax-essential' ),                   
                ),
                
                array(
                    'id'      => 'taxonomy_label',
                    'type'    => 'text',
                    'title'   => esc_html__( 'Singular Name', 'lunax-essential' ),                   
                ),
                
                array(
                    'id'      => 'taxonomy_plural_label',
                    'type'    => 'text',
                    'title'   => esc_html__( 'Plural Name', 'lunax-essential' ),                   
                ),
                 
                array(
                    'id'      => 'slug',
                    'type'    => 'text',
                    'title'   => esc_html__( 'Front Slug', 'lunax-essential' ),                   
                ),
                
                array(
                    'id'          => 'post_types',
                    'type'        => 'select',
                    'title'       => esc_html__('Select post types','lunax-essential'),
                    'chosen'      => true,
                    'multiple'    => true,
                    'placeholder' => esc_html__('Select an post type','lunax-essential'),
                    'options'     => function_exists('lunax_get_cache_post_types') ?  lunax_get_cache_post_types() : [],
                    'default'     => ''
                ),
                
                array(
                    'id'         => 'publicly_queryable',
                    'type'       => 'switcher',
                    'title'      => esc_html__('Publicly Queryable?','lunax-essential'),
                    'default'    => true
                ),
                
                array(
                    'id'         => 'show_in_menu',
                    'type'       => 'switcher',
                    'title'      => esc_html__('Show in admin menu?','lunax-essential'),
                    'default'    => true
                ),  
                 
                
                array(
                    'id'         => 'show_in_nav_menus',
                    'type'       => 'switcher',
                    'title'      => esc_html__('Show in nav menus?','lunax-essential'),
                    'default'    => false
                ),
                
                array(
                    'id'         => 'show_ui',
                    'type'       => 'switcher',
                    'title'      => esc_html__('Show in ui?','lunax-essential'),
                    'default'    => true
                ), 
                array(
                    'id'         => 'show_in_rest',
                    'type'       => 'switcher',
                    'title'      => esc_html__('Show in Rest?','lunax-essential'),
                    'default'    => false
                ), 
                         
            ),
          ),         
    ),

) );