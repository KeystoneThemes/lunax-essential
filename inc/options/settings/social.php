<?php 

    // social
    CSF::createSection( 'lunax_settings', array(
        'title'  => esc_html__( 'Social', 'lunax-essential' ),
        'icon'   => 'fa fa-share-alt',
        'fields' => array(
            array(
                'id'      => 'enable_social_share',
                'type'    => 'switcher',
                'title'   => esc_html__( 'Enable social Share', 'lunax-essential' ),
                'desc'    => esc_html__( 'If you want to enable or disable 404 page button you can set ( YES / NO )', 'lunax-essential' ),
                'default' => false,
            ),
            array(
                'id'           => 'social_share',
                'type'         => 'group',
                'title'        => esc_html__( 'Add social share', 'lunax-essential' ),
                'button_title' => esc_html__( 'Add new share', 'lunax-essential' ),
                'desc'         => esc_html__( 'Set the social share icon and link here. Esay to use it just click the add icon button and search your social icon and set the url for the profile .', 'lunax-essential' ),
                'fields'       => array(
                   
                    array(
                        'id'      => 'bookmark_icon',
                        'type'    => 'icon',
                        'title'   => esc_html__( 'Social Icon', 'lunax-essential' ),
                        'desc'    => esc_html__( 'Set the social profile icon like ( facebook, twitter, linkedin, youtube ect. )', 'lunax-essential' ),
                        'default' => 'fa fa-facebook'
                    ),

                   
                    array(
                        'id'          => 'social_type',
                        'type'        => 'select',
                        'title'       => 'Select',
                        'placeholder' => esc_html__( 'Select an type' , 'lunax-essential' ),
                        'options'     => lunax_social_share_list(),
                        
                      ),
                ),
            ),

            array(
                'id'           => 'social_link',
                'type'         => 'group',
                'title'        => esc_html__( 'Add Social Link', 'lunax-essential' ),
                'button_title' => esc_html__( 'Add New Link', 'lunax-essential' ),
                'desc'         => esc_html__( 'Set the social icon and link here. Esay to use it just click the add icon button and search your social icon and set the url for the profile .', 'lunax-essential' ),
                'fields'       => array(
                   
                    array(
                        'id'      => 'bookmark_icon',
                        'type'    => 'icon',
                        'title'   => esc_html__( 'Social Icon', 'lunax-essential' ),
                        'desc'    => esc_html__( 'Set the social profile icon like ( facebook, twitter, linkedin, youtube ect. )', 'lunax-essential' ),
                        'default' => 'fa fa-facebook'
                    ),

                    array(
                        'id'      => 'bookmark_url',
                        'type'    => 'text',
                        'title'   => esc_html__( 'Profile Url', 'lunax-essential' ),
                        'desc'    => esc_html__( 'Type the social profile url lik http://facebook.com/yourpage. also you can add (facebook, twitter, linkedin, youtube etc.)', 'lunax-essential' ),
                        'default' => 'http://facebook.com/keystonethemes'
                    ),

	                array(
		                'id'    => 'opt_new_tab',
		                'type'  => 'switcher',
		                'title' => esc_html__('New Tab','lunax-essential'),
	                ),

                ),
            ),
   
            array(
                'id'         => 'social_color',
                'type'       => 'color',
                'title'      => esc_html__( 'Footer Social Color', 'lunax-essential' ),
                'desc'       => esc_html__( 'Set the footer social bookmark color from here.', 'lunax-essential' ),
                'default'    => '',
                'dependency' => array( 'enable_footer_social', '==', 'true' ),
            ),

            array(
                'id'         => 'social_hover_color',
                'type'       => 'color',
                'title'      => esc_html__( 'Footer Social Hover Color', 'lunax-essential' ),
                'desc'       => esc_html__( 'Set the footer social bookmark hover color from here.', 'lunax-essential' ),
                'default'    => '',
                'dependency' => array( 'enable_footer_social', '==', 'true' ),
            ),

        ),

    ) );