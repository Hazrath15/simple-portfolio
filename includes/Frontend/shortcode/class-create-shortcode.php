<?php
if( !class_exists('SP_Create_Shortcode') ) {

    class SP_Create_Shortcode {

        use SP_Render_Portfolio_Item_Helper;
        public function __construct() {
            add_shortcode('portfolio_list', [$this, 'sp_portfolio_list_shortcode']);
        }
        function sp_portfolio_list_shortcode($atts) {
            $atts = shortcode_atts([
                'type' => '',
                'per_page' => 6,
            ], $atts);

            $args = [
                'post_type' => 'sp_portfolio',
                'posts_per_page' => (int) $atts['per_page'],
                'paged' => 1,
            ];

            if ($atts['type']) {
                $args['tax_query'] = [[
                    'taxonomy' => 'project_type',
                    'field' => 'slug',
                    'terms' => $atts['type'],
                ]];
            }

            $query = new WP_Query($args);
            ob_start();

            echo '<div id="sp-portfolio-list" class="sp-portfolio-grid">';
            while ($query->have_posts()) {
                $query->the_post();
                $this->sp_render_portfolio_card();
            }
            echo '</div>';

            $total_pages = $query->max_num_pages;

            echo '<div class="button-wrapper">';
            if ($total_pages > 1) {
                echo '<button id="sp-loadmore-btn" 
                        data-page="1" 
                        data-perpage="' . esc_attr($atts['per_page']) . '" 
                        data-type="' . esc_attr($atts['type']) . '" 
                        data-total="' . esc_attr($total_pages) . '">
                        Load More
                    </button>';
            }
            echo '</div>';

            wp_reset_postdata();
            return ob_get_clean();
        }

    }
}

?>