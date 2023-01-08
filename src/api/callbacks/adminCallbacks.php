<?php 
/**
 *This is my basic plugin
 * 
 * @package PluginExample
 */

namespace src\api\callbacks;

class AdminCallbacks 
{
	public function admin_dashboard()
	{
		return require_once( PEF_PLUGIN_PATH . "/templates/template-admin.php" );
	}

	// public function admin_cpt()
	// {
	// 	return require_once( PEF_PLUGIN_PATH . "/templates/template-cpt.php" );
	// }

	// public function admin_taxonomy()
	// {
	// 	return require_once( PEF_PLUGIN_PATH . "/templates/template-taxonomy.php" );
	// }

	// public function admin_widget()
	// {
	// 	return require_once( PEF_PLUGIN_PATH . "/templates/template-widget.php" );
	// }

	// public function mp_text_example()
	// {
	// 	$value = esc_attr( get_option( 'text_example' ) );;
	// 		echo '<input type="text" class="regular-text" name="text_example" value="' . $value . '" placeholder="Write Something!">';
	// }

	// public function mp_first_name()
	// {
	// 	$value = esc_attr( get_option( 'first_name' ) );
	// 	echo '<input type="text" class="regular-text" name="first_name" value="' . $value . '" placeholder="First Name">';
	// }

	// public function mp_last_name()
	// {
	// 	$value = esc_attr( get_option( 'last_name' ) );
	// 	echo '<input type="text" class="regular-text" name="last_name" value="' . $value . '" placeholder="Last Name">';
	// }
}