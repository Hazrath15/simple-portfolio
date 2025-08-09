=== Simple Portfolio Plugin ===
Contributors: hazrathali
Tags: portfolio, shortcode, custom post type, plugin
Requires at least: 5.0
Tested up to: 6.5
Stable tag: 1.0

== Description ==
Simple Portfolio Plugin allows you to display portfolio items using a custom post type and a shortcode. Each item includes client name and project URL.

== Features ==
* Custom Post Type: Portfolio
* Custom Fields: Client Name and Project URL
* Shortcode: [portfolio_list]
* Responsive 3-column grid layout
* Taxonomy: Project Type
** Bonus: Project Type taxonomy and filtering via [portfolio_list type="web"]
* Shortcode: [portfolio_list per_page="6" type="web"]
* Load More button using AJAX

== Usage ==
Use the shortcode `[portfolio_list]` to display portfolio items.

Use `[portfolio_list type="design"]` to filter by project type (optional).

Use `[portfolio_list per_page="6" type="web"]` to filter by project type (optional) with load more functionality.

== Installation ==
1. Upload the plugin to `/wp-content/plugins/`
2. Activate the plugin through the Plugins menu
3. Add Portfolio items via Dashboard > Portfolio
