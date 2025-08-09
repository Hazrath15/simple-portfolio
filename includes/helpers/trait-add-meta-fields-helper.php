<?php
trait SP_Add_Meta_Fields_Helper {
    function sp_portfolio_meta_callback($post) {
        wp_nonce_field('sp_save_portfolio_meta', 'sp_portfolio_nonce');

        $client_name = get_post_meta($post->ID, '_sp_client_name', true);
        $project_url = get_post_meta($post->ID, '_sp_project_url', true);

        ?>
        <p>
            <label for="sp_client_name"><strong>Client Name:</strong></label><br>
            <input type="text" id="sp_client_name" name="sp_client_name" value="<?php echo esc_attr($client_name); ?>" style="width:100%;">
        </p>
        <p>
            <label for="sp_project_url"><strong>Project URL:</strong></label><br>
            <input type="text" id="sp_project_url" name="sp_project_url" value="<?php echo esc_url($project_url); ?>" style="width:100%;">
        </p>
        <?php
    }
}
?>