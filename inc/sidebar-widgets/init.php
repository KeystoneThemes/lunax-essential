<?php 

    include_once(LUNAX_ESSENTIAL_DIR_PATH.'inc/sidebar-widgets/recent-post.php');
    include_once(LUNAX_ESSENTIAL_DIR_PATH.'inc/sidebar-widgets/social.php');
    include_once(LUNAX_ESSENTIAL_DIR_PATH.'inc/sidebar-widgets/cta-banner.php');
    
    add_action( 'widgets_init', 'lunax_register_sidebar_widgets' );
    
    function lunax_register_sidebar_widgets() {
    	register_widget( 'Lunax_Recent_Post' );
    	register_widget( 'Lunax_Banner_Widget' );
    }
