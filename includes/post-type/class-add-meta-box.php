<?php
if( !class_exists('SP_Add_Meta_Box') ) {
    class SP_Add_Meta_Box {
        use SP_Add_Meta_Fields_Helper;

        public function __construct() {
            add_action('add_meta_boxes', [$this, 'sp_add_portfolio_meta_boxes']);
        }

        function sp_add_portfolio_meta_boxes() {
            add_meta_box(
                'sp_portfolio_meta',
                'Portfolio Details',
                [$this, 'sp_portfolio_meta_callback'],
                'sp_portfolio',
                'normal',
                'high'
            );
        }

    }
}