<?php
if( !class_exists('SP_Save_Post_Hanlder') ) {
    class SP_Save_Post_Hanlder {

        use SP_Save_Meta_Fields_Helper;
        public function __construct() {
            add_action('save_post_sp_portfolio', [$this, 'sp_save_portfolio_meta']);
        }
        
    }
}
?>