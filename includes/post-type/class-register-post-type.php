<?php
if ( ! class_exists( 'SP_Register_Post_Type' ) ) {
    class SP_Register_Post_Type {
        use SP_Register_Taxonomy_Helper;
        public function __construct() {
            add_action( 'init', [ $this, 'sp_register_post_types' ] );
            add_action('init', [ $this, 'sp_register_project_type_taxonomy']);
        }
        function sp_register_post_types() {
            register_post_type('sp_portfolio', [
                'labels'      => [
                    'name'                  => __('Portfolio', 'simple-portfolio'),
                    'singular_name'         => __('Portfolio', 'simple-portfolio'),
                    'add_new'               => __('Add New', 'simple-portfolio'),
                    'add_new_item'          => __('Add New Portfolio', 'simple-portfolio'),
                    'new_item'              => __('New Portfolio', 'simple-portfolio'),
                    'edit_item'             => __('Edit Portfolio', 'simple-portfolio'),
                    'view_item'             => __('View Portfolio', 'simple-portfolio'),
                    'all_items'             => __('All Portfolio', 'simple-portfolio'),
                ],
                'public' => true,
                'supports' => ['title', 'editor', 'thumbnail'],
                'rewrite' => ['slug' => 'portfolio'],
                'taxonomies' => ['category'],
                'has_archive' => true,
                'menu_icon' => 'dashicons-welcome-write-blog',
            ]);
        }
    }
}

?>