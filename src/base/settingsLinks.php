<?php

/**
 * @package PluginExample
 */

namespace src\base;

class SettingsLinks
{
    public function register()
    {
        add_filter("plugin_action_links_" . PEF_PLUGIN_NAME, array($this, 'settings_link'));
    }

    public function settings_link($links)
    {
        $settings_link = '<a href="admin.php?page=plugin_example">Settings</a>';
        array_push($links, $settings_link);
        return $links;
    }
}
