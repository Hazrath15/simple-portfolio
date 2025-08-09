<?php
if( !class_exists('SP_Autoloader') ) {
    class SP_Autoloader {
        public static function init() {

            // Include Helpers
            require_once SP_PLUGIN_DIR . 'includes/helpers/trait-add-meta-fields-helper.php';
            require_once SP_PLUGIN_DIR . 'includes/helpers/trait-meta-field-handler.php';
            require_once SP_PLUGIN_DIR . 'includes/helpers/trait-register-taxonomy-helper.php';
            require_once SP_PLUGIN_DIR . 'includes/helpers/trait-render-portfolio-item-helper.php';

            //Include Activator and Deactivator classes
            require_once SP_PLUGIN_DIR . 'includes/class-activator.php';
            require_once SP_PLUGIN_DIR . 'includes/class-deactivator.php';

            // Include the post type registration class
            require_once SP_PLUGIN_DIR . 'includes/post-type/class-register-post-type.php';
            require_once SP_PLUGIN_DIR . 'includes/post-type/class-add-meta-box.php';
            require_once SP_PLUGIN_DIR . 'includes/post-type/class-save-post-handler.php';

            // Include the assets loader class
            require_once SP_PLUGIN_DIR . 'includes/Frontend/Assets/class-assets-loader.php';
            require_once SP_PLUGIN_DIR . 'includes/Frontend/class-ajax-action.php';

            // Include the shortcode class
            require_once SP_PLUGIN_DIR . 'includes/Frontend/shortcode/class-create-shortcode.php';

            // Register the post type
            new SP_Register_Post_Type();
            new SP_Add_Meta_Box();
            new SP_Save_Post_Hanlder();
            new SP_Assets_Loader();
            new SP_Create_Shortcode();
            new SP_Ajax_Action();
        }
    }
}

?>