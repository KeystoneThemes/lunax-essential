<?php


// Post Page
CSF::createSection( LUNAX_OPTION_KEY, array(
	'icon'  => 'fas fa-holly-berry',
	'id'    => '404_page_section', // Set a unique slug-like ID
	'title' => esc_html__( '404', 'lunax-essential' )
) );

CSF::createSection( LUNAX_OPTION_KEY, array(
	'parent' => '404_page_section', // The slug id of the parent section
	'icon'   => 'fa fa-book',
	'title'  => esc_html__( 'Content', 'lunax-essential' ),
	'fields' => array(
		array(
			'type'    => 'subheading',
			'content' => esc_html__( '404 Error Page Setting', 'lunax-essential' ),
		),

		array(
			'id'      => 'error_title',
			'type'    => 'text',
			'title'   => esc_html__( 'Error title', 'lunax-essential' ),
			'desc'    => esc_html__( 'Set your 404 error title.', 'lunax-essential' ),
			'default' => esc_html__( '404', 'lunax-essential' ),
		),

		array(
			'id'      => 'error_subtitle',
			'type'    => 'text',
			'title'   => esc_html__( 'Error subtitle', 'lunax-essential' ),
			'desc'    => esc_html__( 'Set your 404 error subtitle.', 'lunax-essential' ),
			'default' => esc_html__( 'Ops! Page not found', 'lunax-essential' ),
		),

		array(
			'id'      => 'error_content',
			'type'    => 'wp_editor',
			'title'   => esc_html__( 'Error content', 'lunax-essential' ),
			'desc'    => esc_html__( 'Set your 404 error subtitle.', 'lunax-essential' ),
			'default' => esc_html__( 'The page you are looking for was moved, removed, renamed or never existed.', 'lunax-essential' ),
		),

		array(
			'id'      => 'enable_404_search_button',
			'type'    => 'switcher',
			'title'   => esc_html__( 'Enable Search Button', 'lunax-essential' ),
			'desc'    => esc_html__( 'If you want to enable or disable 404 page button you can set ( YES / NO )', 'lunax-essential' ),
			'default' => true,
		),

		array(
			'id'         => 'error_btn_text',
			'type'       => 'text',
			'title'      => esc_html__( 'Button Text', 'lunax-essential' ),
			'desc'       => esc_html__( 'Set your 404 button text.', 'lunax-essential' ),
			'default'    => esc_html__( 'Back to Home', 'lunax-essential' ),
			'dependency' => array( 'enable_404_search_button', '==', 'true' ),
		),
	)
) );

CSF::createSection( LUNAX_OPTION_KEY, array(
	'parent' => '404_page_section',
	'icon'   => 'fa fa-book',
	'title'  => esc_html__( 'Style', 'lunax-essential' ),
	'fields' => array(
		array(

			'id'     => 'banner_404_image',
			'type'   => 'background',
			'title'  => esc_html__( 'Upload Background', 'lunax-essential' ),
			'desc'   => esc_html__( 'Upload main Image width 1200px and height 400px.', 'lunax-essential' ),
			'output' => '.error404 .body-wrapper'
		),

		array(
			'id'               => 'banner_404_content_title_color',
			'type'             => 'color',
			'title'            => esc_html__( 'Title Color', 'lunax-essential' ),
			'output'           => '.error404 .default-error__title',
			'output_important' => true
		),

		array(
			'id'               => 'banner_404_content_subtitle_color',
			'type'             => 'color',
			'title'            => esc_html__( 'SubTitle Color', 'lunax-essential' ),
			'output'           => '.error404 .default-error__sub-title',
			'output_important' => true
		),

		array(
			'id'               => 'banner_404_content_c_color',
			'type'             => 'color',
			'title'            => esc_html__( 'Content Color', 'lunax-essential' ),
			'output'           => '.error404 .default-error__content p',
			'output_important' => true
		),
		array(
			'type'    => 'subheading',
			'content' => esc_html__( 'Button', 'lunax-essential' ),
		),

		array(
			'id'               => 'banner_404_content_button_color',
			'type'             => 'color',
			'title'            => esc_html__( 'Button Color', 'lunax-essential' ),
			'output'           => '.error404 .default-error_go_btn a,.error404 .default-error_go_btn i',
			'output_important' => true
		),
		array(
			'id'               => 'banner_404_content_button_bg_color',
			'type'             => 'color',
			'title'            => esc_html__( 'Button bgColor', 'lunax-essential' ),
			'output'           => '.error404 .default-error_go_btn a',
			'output_important' => true,
			'output_mode'      => 'background-color'
		),

		array(
			'id'     => 'banner_404_content_button_border',
			'type'   => 'border',
			'title'  => esc_html__( 'Button Border', 'lunax-essential' ),
			'output' => '.error404 .default-error_go_btn a'
		),

		array(
			'id'               => 'banner_404_content_button_hcolor',
			'type'             => 'color',
			'title'            => esc_html__( 'Button Hover Color', 'lunax-essential' ),
			'output'           => '.error404 .default-error_go_btn:hover a,.error404 .default-error_go_btn:hover i',
			'output_important' => true
		),
		array(
			'id'               => 'banner_404_content_button_bg_hcolor',
			'type'             => 'color',
			'title'            => esc_html__( 'Button Hover bgColor', 'lunax-essential' ),
			'output'           => '.error404 .default-error_go_btn:hover a',
			'output_important' => true,
			'output_mode'      => 'background-color'
		),

		array(
			'id'     => 'banner_404_content_button_hborder',
			'type'   => 'border',
			'title'  => esc_html__( 'Button Hover Border', 'lunax-essential' ),
			'output' => '.error404 .default-error_go_btn a:hover'
		),
	)
) );
    