<?php 

    // Blog a top-tab
    CSF::createSection( LUNAX_OPTION_KEY, array(
        'id'    => 'blog_tab',                     // Set a unique slug-like ID
        'title' => esc_html__( 'Blog', 'lunax-essential' ),
        'icon'  => 'fas fa-archive',
    ) ); 
    // Blog
    CSF::createSection( LUNAX_OPTION_KEY, array(
        'parent' => 'blog_tab',                        // The slug id of the parent section
        'icon'   => 'fas fa-archive',
        'title'  => esc_html__( 'General', 'lunax-essential' ),
        'fields' => array(
            array(
                'id'          => 'blog_layout',
                'type'        => 'select',
                'title'       => esc_html__('Blog Layout', 'lunax-essential'),
                'placeholder' => 'Select an Style',
                'options'     => array(
                    'style-1'       => esc_html__('Style 1', 'lunax-essential'),
                    'style-2'  => esc_html__('Style 2', 'lunax-essential'),
                  
                ),
                'default'    => 'style-1',
            ),
             
            array(
                'id'          => 'blog_sidebar',
                'type'        => 'select',
                'title'       => esc_html__('Blog Sidebar', 'lunax-essential'),
                'placeholder' => 'Select an option',
                'options'     => array(
                    'blog-lg'       => esc_html__('No sidebar', 'lunax-essential'),
                    'left-sidebar'  => esc_html__('Left Sidebar', 'lunax-essential'),
                    'right-sidebar' => esc_html__('Right Sidebar', 'lunax-essential'),
                ),
                'default'    => '',
            ),
            array(
                'id'            => 'blog_content_container_size',
                'type'          => 'dimensions',
                'title'         => esc_html__( 'Content Container size(px)', 'lunax-essential' ),
                'placeholder'   => '860',
                'dependency' => array( 'blog_post_nav', '==', 'true' ),
                'units'         => array( 'px','em','cm' ),
                'output_prefix' => 'max',
                'height'        => false,
                'output'        => 'html .default-blog__grid',
            ),
            array(
                'id'          => 'blog_content_padding',
                'type'        => 'spacing',
                'title'       => esc_html__('Blog Content Padding','lunax-essential'),
                'left'        => false,
                'right'       => false,
                'units'       => array( 'px','em','cm' ),
                'output_mode' => 'padding',
                'output'      => 'html .default-blog__area',
            ),
            array(
                'id'      => 'blog_meta_above_title',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog meta above title', 'lunax-essential' ),
                'default' => false,
            ),
            
            array(
                'id'      => 'blog_thumb',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Thumbnail', 'lunax-essential' ),
                'default' => false,
            ),

	        array(
		        'id'      => 'blog_excerpt',
		        'type'    => 'switcher',
		        'title'   => esc_html__( 'Blog Excerpt', 'lunax-essential' ),
		        'default' => true,
	        ),

            array(
                'id'      => 'blog_author',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Author', 'lunax-essential' ),
                'default' => false,
            ),
            
            array(
                'id'      => 'blog_author_image',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Author image', 'lunax-essential' ),
                'default' => false,
            ),

            array(
                'id'      => 'blog_date',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Date', 'lunax-essential' ),
                'default' => true,
            ),
            
            array(
                'id'      => 'blog_comment',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Comment', 'lunax-essential' ),
                'default' => false,
            ),
            
            array(
                'id'      => 'blog_category',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Category', 'lunax-essential' ),
                'default' => true,
            ),
           
            array(
                'id'      => 'blog_readmore',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Readmore', 'lunax-essential' ),
                'default' => true,
            ),
            array(
                'id'      => 'blog_readmore_text',
                'type'    => 'text',
                'title'   => esc_html__( 'Blog Readmore Text', 'lunax-essential' ),
                'default' => esc_html__( 'Read More', 'lunax-essential' ),
            ),
            
            array(
                'id'      => 'blog_readmore__icon',
                'type'    => 'media',
                'title'   => esc_html__('Readmore Icon','lunax-essential'),
                'library' => 'image',
            ),
          
            array(
                'id'      => 'blog_post_nav',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Blog Navigation', 'lunax-essential' ),
                'default' => true,
            ),
            
            array(
                'id'         => 'blog_next_icon',
                'type'       => 'media',
                'title'      => esc_html__('Next Icon','lunax-essential'),
                'library'    => 'image',           
                'dependency' => array( 'blog_post_nav', '==', 'true' ),
            ),
            
            array(
                'id'         => 'blog_prev_icon',
                'type'       => 'media',
                'title'      => esc_html__('Prev Icon','lunax-essential'),
                'library'    => 'image',            
                'dependency' => array( 'blog_post_nav', '==', 'true' ),
            ),

            array(
            'id'          => 'blog_post_nav_alignment',
            'type'        => 'select',
            'title'       => esc_html__( 'Navigation Alignment', 'lunax-essential' ),
            'placeholder' => 'Select an option',
            'options'     => array(
                'justify-content-start'  => esc_html__( 'Left', 'lunax-essential' ),
                'justify-content-center' => esc_html__( 'Center', 'lunax-essential' ),
                'justify-content-end'    => esc_html__( 'Right', 'lunax-essential' ),
            ),          
            'dependency' => array( 'blog_post_nav', '==', 'true' ),
            'default'    => 'justify-content-start'
            ),
           
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Blog & Page Default Options', 'lunax-essential' ),
            ),
            
            array(
                'id'      => 'blog_excerpt_word',
                'type'    => 'number',
                'title'   => esc_html__( 'Blog Excerpt Word', 'lunax-essential' ),
                'desc'    => esc_html__( 'Set the words that how many words you want to show in every blog post item.', 'lunax-essential' ),
                'default' => '30',
            ),
        

        )
    ) ); 
     // fav icon
    CSF::createSection( LUNAX_OPTION_KEY, array(
        'parent' => 'blog_tab',                           // The slug id of the parent section  
        'title'  => esc_html__('Sidebar Style','lunax-essential'),
        'icon'   => 'fa fa-image',
        'fields' => array(

            array(
                'id'      => 'news__sidebars_bg',
                'type'    => 'background',
                'title'   => esc_html__( 'Sidebar Background', 'lunax-essential' ),
                'desc'    => esc_html__( 'Upload a new background image to set the footer background.', 'lunax-essential' ),
                'default' => array(
                    'image'      => '',
                    'repeat'     => 'no-repeat',
                    'position'   => 'center center',
                    'attachment' => 'scroll',
                    'size'       => 'cover',
                   
                ),
                'output' => '.default-sidebar__widget .widget,.default-sidebar__widget'
            ),
           
            array(
                    'id'    => 'news__sidebars_padding_top',
                    'type'  => 'slider',
                    'title' => esc_html__( 'Sidebar Padding Top', 'lunax-essential' ),
                    'min'   => 0,
                    'max'   => 200,
                    'step'  => 1,
                    'unit'  => 'px',
                    
            ),
            array(
                    'id'    => 'news__sidebars_padding_bottom',
                    'type'  => 'slider',
                    'title' => esc_html__( 'Sidebar Padding Bottom', 'lunax-essential' ),
                    'min'   => 0,
                    'max'   => 200,
                    'step'  => 1,
                    'unit'  => 'px',
                    
            ),
         
            array(
              'type'    => 'subheading',
              'content' => esc_html__( 'Text & Link Color', 'lunax-essential' ),
            ),
            array(
                'id'     => 'news__sidebars_widget_title_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Title Color', 'lunax-essential' ),
                'desc'   => esc_html__( 'Set Sideabr widget title color form here.', 'lunax-essential' ),
                'output' => '.default-sidebar__widget .widget .widget-title,.default-sidebar__widget .widget-title'
            ),
            array(
                'id'     => 'news__sidebars_widget_content_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Content Color', 'lunax-essential' ),
                'desc'   => esc_html__( 'Set footer widget content color form here.', 'lunax-essential' ),
                'output' => '
                .default-sidebar__widget select, 
                .default-sidebar__widget .tagcloud a,
                .default-sidebar__widget ul li a,
                .rsswidget,
                .default-sidebar__recent-item p,
                .default-sidebar__widget,               
                .default-sidebar__widget .widget,               
                .default-sidebar__wrapper .widget_pages li a,
                .default-sidebar__wrapper .widget_meta li a, 
                .default-sidebar__wrapper .widget_nav_menu li a, 
                .default-sidebar__wrapper .widget_recent_entries li a,s
                .default-sidebar__widget ul li a,
                .default-sidebar__wrapper .widget_rss ul cite,
                .default-sidebar__wrapper .widget_recent_comments li a,
                .default-sidebar__wrapper .widget_rss ul a,
                .default-sidebar__wrapper .widget_rss .rssSummary,
                .default-sidebar__wrapper .widget_rss ul .rss-date,
                .default-sidebar__widget .widget ul li a.url'
            ),
            array(
                'id'     => 'sidebar_border_color',
                'type'   => 'border',
                'title'  => esc_html__( 'Border Color', 'lunax-essential' ),
                'output' => '.default-sidebar__widget'
            ),
            array(
                'id'    => 'sidebar_widget_title_margin_top',
                'type'  => 'slider',
                'title' => esc_html__( 'Title Margin Top', 'lunax-essential' ),
                'min'   => 0,
                'max'   => 200,
                'step'  => 1,
                'unit'  => 'px',
                
          ),
            array(
                'id'    => 'sidebar_widget_title_margin_bottom',
                'type'  => 'slider',
                'title' => esc_html__( 'Title Margin bottom', 'lunax-essential' ),
                'min'   => 0,
                'max'   => 200,
                'step'  => 1,
                'unit'  => 'px',
                
          ),
       
            array(
                'id'     => 'sidebars_link_color',
                'type'   => 'color',
                'title'  => esc_html__( 'Sideber links color', 'lunax-essential' ),
                'desc'   => esc_html__( 'Set the Sidebar area link color', 'lunax-essential' ),
                'output' => '.default-sidebar__widget .single-blog-post a .default-sidebar__widget .tagcloud a, .default-sidebar__widget .widget a, .default-sidebar__widget .widget ul li a.url,.default-sidebar__widget .widget ul li a.rsswidget'
            ),

            array(
                'id'     => 'sidebar_link_hover',
                'type'   => 'color',
                'title'  => esc_html__( 'Sidebar links Hover color', 'lunax-essential' ),
                'desc'   => esc_html__( 'Set the footer area link hover color', 'lunax-essential' ),
                'output' => '.default-sidebar__widget .single-blog-post a:hover, .default-sidebar__widget .tagcloud a:hover,.default-sidebar__widget .widget a:hover, .default-sidebar__widget .widget ul li a.url:hover,.default-sidebar__widget .widget ul li a.rsswidget:hover'
            ),

        )
    ) );