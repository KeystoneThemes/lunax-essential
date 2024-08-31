<?php 

  // custom css
  CSF::createSection( 'lunax_settings', array(
    'title'  => esc_html__( 'Custom Code', 'lunax-essential' ),
    'icon'   => 'fa fa-code',
    'fields' => array(
    
          array(
            'id'            => 'opt-tabbed-code',
            'type'          => 'tabbed',
            'title'         => esc_html__('Custom Code','lunax-essential'),
            'tabs'          => array(
              array(
                'title'     => 'Css',
                'icon'      => 'fa fa-css3',
                'fields'    => array(                    
                      array(
                        'id'       => 'custom_css',
                        'type'     => 'code_editor',
                        'title'    => esc_html__('Desktop Device','lunax-essential'),
                        'settings' => array(
                          'theme'  => 'mbo',
                          'mode'   => 'css',
                        ),
                        'default'  => '',
                      ),
                    
                     array(
                        'id'       => 'custom_css_tab',
                        'type'     => 'code_editor',
                        'title'    => esc_html__('Tab Device','lunax-essential'),
                        'help' => esc_html__('Max width 991','lunax-essential'),
                        'settings' => array(
                          'theme'  => 'mbo',
                          'mode'   => 'css',
                        ),
                        'default'  => '',
                      ),
                    
                     array(
                        'id'       => 'custom_css_mobile',
                        'type'     => 'code_editor',
                        'title'    => esc_html__('Mobile Device','lunax-essential'),
                        'settings' => array(
                          'theme'  => 'mbo',
                          'mode'   => 'css',
                        ),
                        'default'  => '.element{ color: #ffbc00; }',
                      ),
                )
              ),
              array(
                'title'     => 'JS',
                'icon'      => 'fa fa-gear',
                'fields'    => array(
                    array(
                        'id'       => 'opt_code_editor_js',
                        'type'     => 'code_editor',
                        'title'    => esc_html__('Javascript Editor','lunax-essential'),
                        'settings' => array(
                          'theme'  => 'monokai',
                          'mode'   => 'javascript',
                        ),
                        'default'  => '',
                    ),
                )
              ),
              array(
                'title'     => 'HTML',
                'icon'      => 'fab fa-html5',
                'fields'    => array(
                    array(
                        'id'       => 'opt_code_editor_html',
                        'type'     => 'code_editor',
                        'title'    => 'Footer HTML Editor',
                        'help'     => esc_html__('Html will be load in footer','lunax-essential'),
                        'settings' => array(
                            'theme'  => 'monokai',
                            'mode'   => 'htmlmixed',
                            'tabSize' => 4
                        ),
                        'default'  => '',
                        'sanitize' => false,
                    ),
                )
              ),
            )
          ),         
          
    ),
  ) ); 