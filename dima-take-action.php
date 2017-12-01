<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://pixeldima.com
 * @since             1.0.0
 * @package           Dima_Take_Action
 *
 * @wordpress-plugin
 * Plugin Name:       Dima Take Action
 * Plugin URI:        http://pixeldima.com/dima-take-action-uri/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Pixeldima
 * Author URI:        http://pixeldima.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       dima-take-action
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'DIMA_TAKE_ACTION_VERSION', '1.0.0' );
define( 'DIMA_TAKE_ACTION_NAME', 'Dima Take Action' );


/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-pixeldima-base.php';

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-dima-take-action-activator.php
 */
function activate_dima_take_action() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-dima-take-action-activator.php';
	Dima_Take_Action_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-dima-take-action-deactivator.php
 */
function deactivate_dima_take_action() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-dima-take-action-deactivator.php';
	Dima_Take_Action_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_dima_take_action' );
register_deactivation_hook( __FILE__, 'deactivate_dima_take_action' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-dima-take-action.php';


/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_dima_take_action() {

	$plugin = new Dima_Take_Action();
	$plugin->run();

}
run_dima_take_action();
