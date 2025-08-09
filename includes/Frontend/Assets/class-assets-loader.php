<?php
if( !class_exists('SP_Assets_Loader')) {
    class SP_Assets_Loader {

        public function __construct() {
            add_action('wp_enqueue_scripts', [$this, 'sp_enqueue_frontend_assets']);
        }
        public function sp_enqueue_frontend_assets( $hook ) {

            wp_enqueue_style( 'sp-main-css', plugins_url( '../assets/css/main.css', plugin_dir_path( __DIR__ ) ), [], '1.0.0' ,false);
            wp_enqueue_script( 'sp-main-js', plugins_url( '../assets/js/main.js', plugin_dir_path( __DIR__ ) ), [], '1.0.0', true );
            wp_localize_script('sp-main-js', 'sp_portfolio_ajax', [
                'ajaxurl' => admin_url('admin-ajax.php'),
                'nonce' => wp_create_nonce('sp_loadmore_nonce')
            ]);
        }
    }
}

?>