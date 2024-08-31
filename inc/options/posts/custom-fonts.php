<?php 

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    // Set a unique slug-like ID
    $post_prefix = 'lunax_custom_fonts_options';
  
    CSF::createMetabox( $post_prefix, array(
      'title'     => 'Settings',
      'post_type' => 'wdb-custom-font',
    ) );
     
    
    CSF::createSection( $post_prefix, array(
      'title'  =>  esc_html__( 'Settings', 'lunax-essential'),
      'fields' => array(
      
        array(
          'type'     => 'callback',
          'function' =>  'wdb_custom_font_demo_review_callback',
        ),
      
        array(
          'id'     => 'wdb_font_variation',
          'type'   => 'repeater',
          'title'  => esc_html__('Add Font Variation','joya-essential'),
          'fields' => array(
        
            array(
              'id'          => 'font_weight',
              'type'        => 'select',
              'title'       => esc_html__('Font Weight','lunax-essential'),
              'placeholder' => esc_html__('Select an Weight','lunax-essential'),
              'options'     => array(
                '100'  => '100',
                '200'  => '200',                
                '300'  => '300',                
                '400'  => '400 Regular',                
                '500'  => '500',                
                '600'  => '600',                
                '700'  => '700',                
                '800'  => '800',                
                '900'  => '900',                
              ),
              'default'     => '400'
            ),
            
            array(
              'id'          => 'font_style',
              'type'        => 'select',
              'title'       => esc_html__('Style','lunax-essential'),
              'placeholder' => 'Select an Style',
              'options'     => array(
                'normal'  => 'Normal',
                'italic'  => 'Italic',
                'oblique'  => 'Oblique'                             
              ),
              'default'     => 'normal'
            ),
            
            array(
              'id'      => 'woff_file',
              'type'    => 'upload',
              'placeholder' => esc_html__('The Web Open Font Format','lunax-essential'),
              'title'   => esc_html__('WOFF FILE','lunax-essential'),             
            ),
            
            array(
              'id'      => 'woff2_file',
              'type'    => 'upload',
              'placeholder' => esc_html__('The Web Open Font Format 2 . Used by modern browser','lunax-essential'),
              'title'   => esc_html__('WOFF2 FILE','lunax-essential'),             
            ),
            
            array(
              'id'      => 'ttf_file',
              'type'    => 'upload',
              'placeholder' => esc_html__('The TrueType Font Format  . Best used for safari , android ios','lunax-essential'),
              'title'   => esc_html__('TTF FILE','lunax-essential'),             
            ),
            
            array(
              'id'      => 'eot_file',
              'type'    => 'upload',
              'placeholder' => esc_html__('Embeded Open Type   . Best used for IE6-9','lunax-essential'),
              'title'   => esc_html__('EOT FILE','lunax-essential'),             
            ),            
        
          ),
        ),
  
      )
      
    ) );    
  
  }
  