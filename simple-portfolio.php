<?php
/*
* Plugin Name: Simple Portfolio
* Description: This is a simple portfolio plugin. This plugin is developed by hazrath ali for viserx assesment.
* Version: 1.0.0
* Author: Hazrath Ali
* Author URI: https://github.com/Hazrath15
* License: GPL-2.0+
* License URI: https://www.gnu.org/licenses/gpl-2.0.html
* Text Domain: simple-portfolio
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
define( 'SP_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

require_once SP_PLUGIN_DIR . 'includes/class-loader.php';
SP_Autoloader::init();

// Register activation and deactivation hooks
register_activation_hook(__FILE__, ['SP_Activator', 'activate']);
register_deactivation_hook(__FILE__, ['SP_Deactivator', 'deactivate']);

?>