<?php
if( !class_exists('SP_Activator') ){
    class SP_Activator {
        public static function activate() {
            // Actions to perform on plugin activation
            flush_rewrite_rules();
        }
    }
}

?>