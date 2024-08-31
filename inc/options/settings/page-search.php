<?php 
 

 // Post Page
CSF::createSection( LUNAX_OPTION_KEY, array(
    'icon'   => 'fas fa-search',
    'id'    => 'search_page_section', // Set a unique slug-like ID
    'title' => esc_html__( 'Search', 'lunax-essential' )
    ) );
    
    CSF::createSection( LUNAX_OPTION_KEY, array(
        'parent' => 'search_page_section', // The slug id of the parent section
        'icon'   => 'fa fa-book',
        'title'  => esc_html__( 'Content', 'lunax-essential' ),
        'fields' => array(
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Search Page Setting', 'lunax-essential' ),
              ),
              
              array(
                'id'      => 'enable_search_sidebar',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Enable Sidebar', 'lunax-essential' ),
                'desc'    => esc_html__( 'If you want to enable sidebar form you can set ( YES / NO )', 'lunax-essential' ),
                'default' => false,
              ),
            
              array(
                  'id'         => 'search_not_found_title',
                  'type'       => 'text',
                  'title'      => esc_html__( 'Search not found title', 'lunax-essential' ),
                  'desc'       => esc_html__( 'Set your Search title.', 'lunax-essential' ),
                  'default'    => esc_html__( 'Nothing found!', 'lunax-essential' ),
              ),
              
              array(
                'id'         => 'search_not_found_content',
                'type'       => 'wp_editor',
                'title'      => esc_html__( 'Error content', 'lunax-essential' ),
                'desc'       => esc_html__( 'Set your 404 error subtitle.', 'lunax-essential' ),
                'default'    => esc_html__( 'It looks like nothing was found here. Maybe try a search?', 'lunax-essential' ),
             ),
              
              array(
                'id'         => 'search_found_title',
                'type'       => 'text',
                'title'      => esc_html__( 'Found Title', 'lunax-essential' ),
                'desc'       => esc_html__( 'Set your search found title.', 'lunax-essential' ),
                'default'    => esc_html__( 'Search Results for:', 'lunax-essential' ),
             ),
         
             array(
                  'id'      => 'enable_search_form',
                  'type'    => 'switcher',
                  'title'   => esc_html__( 'Enable Search Form', 'lunax-essential' ),
                  'desc'    => esc_html__( 'If you want to enable or disable search form you can set ( YES / NO )', 'lunax-essential' ),
                  'default' => true,
             ),
             
             array(
                'type'    => 'heading',
                'content' => 'Limit Post type in Search Result',
              ),
             
             array(
                'id'          => 'search_result_post_types',
                'type'        => 'select',
                'title'       => 'Select post types for search result',
                'chosen'      => true,
                'multiple'    => true,
                'placeholder' => 'Select an post type',
                'options'     => function_exists('lunax_get_cache_post_types') ?  array_merge( lunax_get_cache_post_types(), ['post' => 'post' , 'page'=> 'page'] ) : ['post' => 'post' , 'page'=> 'page'],
                'default'     => ''
            ),  
              
        )
    ) );
    
    CSF::createSection( LUNAX_OPTION_KEY, array(
        'parent' => 'search_page_section', // The slug id of the parent section
        'icon'   => 'fa fa-book',
        'title'  => esc_html__( 'Style', 'lunax-essential' ),
        'fields' => array(
            array(
            
                'id'      => 'search_bg_image',
                'type'    => 'background',
                'title'   => esc_html__( 'Upload Background', 'lunax-essential' ),
                'desc'    => esc_html__( 'Upload main Image width 1200px.', 'lunax-essential' ),
                'output' => '.search .body-wrapper'
            ),
            
            array(
                'id'     => 'search_content_title_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Title Color', 'lunax-essential' ),
                'output' => '.search .default-search-title, .default-search-title-wrapper h2',
                'output_important' => true
            ),
            
            
            array(
                'id'     => 'search_content_c_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Content Color', 'lunax-essential' ),
                'output' => '.search .default-search__again-form p',
                'output_important' => true
            ),
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Form', 'lunax-essential' ),
              ),
              
            array(
                'id'     => 'search_form_input_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Input Color', 'lunax-essential' ),
                'output' => '.search .joya-search-form input',
                'output_important' => true
            ),
            array(
                'id'     => 'search_form_input_icon_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Input Icon Color', 'lunax-essential' ),
                'output' => '.search .joya-search-form button i',
                'output_important' => true
            ),
            array(
                'id'     => 'search_form_input_bg_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Input bgColor', 'lunax-essential' ),
                'output' => '.search .joya-search-form input',
                'output_important' => true,
                'output_mode' => 'background-color'
            ),
            
            array(
                'id'     => 'search_form_input_border',
                'type'   => 'border',
                'title'  => esc_html__('Input Border','lunax-essential'),
                'output' => '.search .joya-search-form input'
            ),
            
            array(
                'id'     => 'search_content_input_placeholdercolor',
                'type'   => 'color',
                'title'  => esc_html__( 'Input Placeholder Color', 'lunax-essential' ),
                'output' => '.search .joya-search-form input::placeholder,.search .joya-search-form input::-ms-input-placeholder',
                'output_important' => true
            ),
            array(
                'id'     => 'search_content_button_hborder',
                'type'   => 'border',
                'title'  => esc_html__('Input Border','lunax-essential'),
                'output' => '.search .joya-search-form input:hover'
            ),
        )
    ) );
    