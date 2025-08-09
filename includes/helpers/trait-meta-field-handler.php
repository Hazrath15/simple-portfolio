<?php
trait SP_Save_Meta_Fields_Helper {
    function sp_save_portfolio_meta($post_id) {
        if (!isset($_POST['sp_portfolio_nonce']) || !wp_verify_nonce($_POST['sp_portfolio_nonce'], 'sp_save_portfolio_meta')) return;
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
        if (!current_user_can('edit_post', $post_id)) return;

        if (isset($_POST['sp_client_name'])) {
            update_post_meta($post_id, '_sp_client_name', sanitize_text_field($_POST['sp_client_name']));
        }

        if (isset($_POST['sp_project_url'])) {
            update_post_meta($post_id, '_sp_project_url', esc_url_raw($_POST['sp_project_url']));
        }
    }
}