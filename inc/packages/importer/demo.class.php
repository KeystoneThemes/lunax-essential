<?php
namespace LunaxEssentialApp\Importer;

/**
 * demo import.
 */
class Wdb_Theme_Demos
{
	/**
	 * register default hooks and actions for WordPress
	 * @return
	 */
	public function __construct()
	{
       
       add_action( 'fw:ext:backups:tasks:success', [$this,'success'] );
       
        if( !lunax_theme_service_pass() ){
            return;
        }
       
       add_filter( 'fw:ext:backups-demo:demos', [$this,'backups_demos'] );     
 	}
	
    function backups_demos( $demos ) {
        
        $demo_content_installer	 = 'https://api.keystonethemes.com/demos/lunax';
        
        $demos_array			 = array(
        
            'main-demo' => array(
                'title'        => esc_html__( 'Main Demo', 'main-demo' ),
                'category'     => [ 'Digital-marketing', 'SEO' ],
                'screenshot'   => esc_url( $demo_content_installer ) . '/screenshot.jpg',
                'preview_link' => esc_url( 'https://lunax.keystonedemo.com/' ),
            ),
            
        );

        $download_url = esc_url( $demo_content_installer ) . '/download-script.php';
        try {
            foreach ( $demos_array as $id => $data ) {
                $demo		 = new \FW_Ext_Backups_Demo( $id, 'piecemeal', array(
                    'url'		 => $download_url,
                    'file_id'	 => $id,
                ) );
                $category = isset($data[ 'category' ]) ? $data[ 'category' ] : [];
                $demo->set_title( $data[ 'title' ] );
                $demo->set_screenshot( $data[ 'screenshot' ] );
                $demo->set_preview_link( $data[ 'preview_link' ] );
                $demo->set_category( $category );
                $demos[ $demo->get_id() ]	 = $demo;
                unset( $demo );
            }
        } catch (\Exception $e) {
            
        }  
        

        return $demos;
    }
    
    public function success(){
       
        foreach($this->_metas as $key) {
            $value = get_user_meta(1, $key, true);
            update_option( $key, $value );
        }
    }

}

new Wdb_Theme_Demos();




