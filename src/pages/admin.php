<?php

/**
 * @package PluginExample
 */

namespace src\pages;

use \src\api\SettingsApi;

class Admin
{
	public $settings;

	public $pages = array();

	public $subpages = array();

	public function __construct()
	{
		$this->settings = new SettingsApi();
		
		$this->pages = array(
			array(
				'page_title' => 'Plugin Example', 
				'menu_title' => 'Plugin Example', 
				'capability' => 'manage_options', 
				'menu_slug' => 'plugin_example', 
				'callback' => function() { echo '<h1>Example Plugin</h1>'; }, 
				'icon_url' => 'dashicons-store', 
				'position' => 110
			)
		);

		$this->subpages = array(
			array(
				'parent_slug' => 'plugin_example', 
				'page_title' => 'Sub Example 1', 
				'menu_title' => 'Sub Example 1', 
				'capability' => 'manage_options', 
				'menu_slug' => 'alecaddd_cpt', 
				'callback' => function() { echo '<h1>Sub Example 1 Manager</h1>'; }
			),
			array(
				'parent_slug' => 'plugin_example', 
				'page_title' => 'Sub Example 2', 
				'menu_title' => 'Sub Example 2', 
				'capability' => 'manage_options', 
				'menu_slug' => 'alecaddd_taxonomies', 
				'callback' => function() { echo '<h1>Sub Example 2 Manager</h1>'; }
			),
			array(
				'parent_slug' => 'plugin_example', 
				'page_title' => 'Sub Example 3', 
				'menu_title' => 'Sub Example 3', 
				'capability' => 'manage_options', 
				'menu_slug' => 'alecaddd_widgets', 
				'callback' => function() { echo '<h1>Sub Example 3 Manager</h1>'; }
			)
		);
	}

	public function register() 
	{
		
		$this->settings->add_pages( $this->pages )->with_sub_page( 'Plugin Example' )->add_sub_pages( $this->subpages )->register();
	}
}