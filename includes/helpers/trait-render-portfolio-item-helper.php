<?php
trait SP_Render_Portfolio_Item_Helper {

   function sp_render_portfolio_card() {
        $client = get_post_meta(get_the_ID(), '_sp_client_name', true);
        $url = get_post_meta(get_the_ID(), '_sp_project_url', true);

        echo '<div class="sp-portfolio-item">';
        if (has_post_thumbnail()) the_post_thumbnail('medium');
        echo '<h4>' . get_the_title() . '</h4>';
        if ($client) echo '<p><strong>Client:</strong> ' . esc_html($client) . '</p>';
        if ($url) echo '<p><a href="' . esc_url($url) . '" target="_blank">Project Link</a></p>';
        echo '</div>';
    }
}

?>