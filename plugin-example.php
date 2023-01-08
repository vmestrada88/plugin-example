<?php
/**
 *This is my basic plugin 
 * 
 * @package PluginExample
 */
/**
 * Plugin Name: Plugin Example
 * Plugin URI:https://example.com/plugins/plugin-example-form/
 * Description: Learning PHP and wordPress! 
 * Version: 1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author: Victor Estrada
 * Author URI: https://github.com/vmestrada88
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:https://example.com/plugin-example/
 * Text Domain: plugin-example
 * Domain Path: /languages
 **/

defined('ABSPATH') or die('You do not have access, sally human!!!');

define ( 'WP_PLUGIN_VERSION', '1.0.0');


if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

define('PEF_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define('PEF_PLUGIN_URL' , plugin_dir_url(  __FILE__  ) );
define('PEF_ADMIN_URL' , get_admin_url() );
define('PEF_PLUGIN_DIR_BASENAME' , dirname(plugin_basename(__FILE__)) );
define('PEF_PLUGIN_NAME' , plugin_basename(__FILE__) );




 if (class_exists('src\\Init')) {    
    register_activation_hook(__FILE__, array('src\\base\\Activate', 'activate'));
    register_deactivation_hook(__FILE__, array('src\\base\\Deactivate', 'deactivate'));
    src\Init::register_services();
 }

  
