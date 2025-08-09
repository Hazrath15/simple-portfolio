<?php
if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

$portfolio_posts = get_posts([
    'post_type'      => 'sp_portfolio',
    'posts_per_page' => -1,
    'fields'         => 'ids',
]);

$portfolio_meta_keys = [
    '_sp_client_name',
    '_sp_project_url',
];

foreach ($portfolio_posts as $post_id) {
    foreach ($portfolio_meta_keys as $key) {
        delete_post_meta($post_id, $key);
    }
    wp_delete_post($post_id, true);
}

?>