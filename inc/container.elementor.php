<?php

namespace LunaxEssentialApp\Inc;
use \Elementor\Controls_Manager;

class Lunax_Section_Settings {

    public function __construct(){
        // add_action( 'elementor/element/section/section_advanced/after_section_end', [ $this, 'add_controls_section' ],50);
        // add_action( 'elementor/element/container/section_layout/after_section_end', [ $this, 'add_controls_section' ],50);
        add_action( 'elementor/element/icon-box/section_icon/before_section_end', [ $this, 'bottom_top_scroll' ] );
        add_action( 'elementor/element/wdb--button/section_content/before_section_end', [ $this, 'bottom_top_scroll' ] );
        add_action( 'elementor/element/button/section_button/before_section_end', [ $this, 'bottom_top_scroll' ] );
    }
    
    public function bottom_top_scroll( $element ) {
	
        $element->add_control(
			'wdb_enable_bottom_top_scroll',
			[
				'label' => esc_html__( 'Enable ScrollTo', 'lunax-essential' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'lunax-essential' ),
				'label_off' => esc_html__( 'NO', 'lunax-essential' ),
				'return_value' => 'yes',
				'default' => '',
				'frontend_available' => true,
			]
		);
		
    }

    public function add_controls_section( $element ){

        // $element->start_controls_section(
        //     'wdb_isolation_custom_sticky_section',
        //     [
        //         'tab'           =>  \Elementor\Controls_Manager::TAB_ADVANCED,
        //         'label' => esc_html__( 'Lunax Isolation', 'lunax-essential' ),
        //     ]
        // );

        //     $element->add_control(
        //         'wdb_pro_isolation_type',
        //         [
        //             'label' => esc_html__( 'Isolation', 'lunax-essential' ),
        //             'type' => \Elementor\Controls_Manager::SELECT,
        //             'default' => '',
        //             'options' => [

        //                 'isolate'      => esc_html__( 'Isolate', 'lunax-essential' ),
        //                 'revert'       => esc_html__( 'Revert', 'lunax-essential' ),
        //                 'revert-layer' => esc_html__( 'Revert layer', 'lunax-essential' ),
        //                 'auto'         => esc_html__( 'Auto', 'lunax-essential' ),
        //                 'initial'      => esc_html__( 'Initial', 'lunax-essential' ),
        //                 ''             => esc_html__( 'None', 'lunax-essential' ),
                
        //             ],
        //             'selectors' => [
        //                 '{{WRAPPER}}' => 'isolation: {{VALUE}}',
        //             ],
        //         ]
        //     );
 
       // $element->end_controls_section();
        
    }

   
}

new Lunax_Section_Settings();