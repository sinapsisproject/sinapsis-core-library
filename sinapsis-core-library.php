<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              sinapsis.com
 * @since             1.0.0
 * @package           Core_Library
 *
 * @wordpress-plugin
 * Plugin Name:       [Sinapsis] Core Library
 * Plugin URI:        www.sinapsis.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Diego Baeza
 * Author URI:        sinapsis.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       sinapsis-core-library
 * Domain Path:       /languages
 */

 defined( 'ABSPATH' ) or die ( 'No script kiddies please!' );

 define('SINAPSIS_CORE_LIBRARY_PLUGIN_PATH', plugin_dir_path(__FILE__));


//  add_action( 'admin_menu', 'menu_admin_sinapsis' , 1 );

//  function menu_admin_sinapsis(){
//      add_menu_page('Sinapsis', 'Sinapsis', 'manage_options', 'admin-sinapsis' , 'index_admin_sinapsis');
//      add_submenu_page('admin-sinapsis', 'Resumen', 'Resumen', 'manage_options', 'admin-sinapsis' , 'index_admin_sinapsis');
//  }
 
 
//  function index_admin_sinapsis(){
//      include 'partials/index.php';
//  }
 

 if (!class_exists('RfCoreUtils')) {
    include(SINAPSIS_CORE_LIBRARY_PLUGIN_PATH . "includes/SnCoreUtils.php");
    include(SINAPSIS_CORE_LIBRARY_PLUGIN_PATH . "includes/SnCoreCurl.php");
}


?>