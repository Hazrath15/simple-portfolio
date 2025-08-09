<?php
if( !class_exists('SP_Deactivator') ){
    class SP_Deactivator {
        public static function deactivate() {
            // Actions to perform on plugin deactivation
            flush_rewrite_rules();
        }
    }
}

?>