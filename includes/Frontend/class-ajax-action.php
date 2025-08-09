<?php
if( !class_exists('SP_Ajax_Action') ) {
    class SP_Ajax_Action {

        use SP_Render_Portfolio_Item_Helper;
        public function __construct() {
            add_action('wp_ajax_sp_loadmore_portfolio', [$this, 'sp_loadmore_ajax']);
            add_action('wp_ajax_nopriv_sp_loadmore_portfolio', [$this, 'sp_loadmore_ajax']);
        }

        function sp_loadmore_ajax() {
            // check_ajax_referer('sp_loadmore_nonce', 'nonce');

            $paged = isset($_POST['page']) ? intval($_POST['page']) : 1;
            $per_page = isset($_POST['per_page']) ? intval($_POST['per_page']) : 6;
            $type = sanitize_text_field($_POST['type'] ?? '');

            $args = [
                'post_type'      => 'sp_portfolio',
                'posts_per_page' => $per_page,
                'paged'          => $paged,
            ];

            if (!empty($type)) {
                $args['tax_query'] = [[
                    'taxonomy' => 'project_type',
                    'field'    => 'slug',
                    'terms'    => $type,
                ]];
            }

            $query = new WP_Query($args);

            if ($query->have_posts()) {
                ob_start();
                while ($query->have_posts()) {
                    $query->the_post();
                    $this->sp_render_portfolio_card(); 
                }
                wp_reset_postdata();
                $html = ob_get_clean();

                wp_send_json_success([
                    'html' => $html,
                ]);
            } else {
                wp_send_json_error([
                    'message' => 'No more portfolio items found.',
                ]);
            }
            wp_die();
        }

    }
}

?>