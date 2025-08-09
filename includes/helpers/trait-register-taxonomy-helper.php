<?php
trait SP_Register_Taxonomy_Helper {
    function sp_register_project_type_taxonomy() {
        $labels = [
            'name' => 'Project Types',
            'singular_name' => 'Project Type',
            'search_items' => 'Search Project Types',
            'all_items' => 'All Project Types',
            'edit_item' => 'Edit Project Type',
            'update_item' => 'Update Project Type',
            'add_new_item' => 'Add New Project Type',
            'new_item_name' => 'New Project Type Name',
            'menu_name' => 'Project Types',
        ];

        $args = [
            'hierarchical' => true, // like categories
            'labels' => $labels,
            'show_ui' => true,
            'show_admin_column' => true,
            'rewrite' => ['slug' => 'project-type'],
            'show_in_rest' => true,
        ];

        register_taxonomy('project_type', ['sp_portfolio'], $args);
    }
}
?>