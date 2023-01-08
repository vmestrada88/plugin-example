<?php

/**
 * @package PluginExample
 */

namespace src\base;

class  Enqueue
{

    public function register()
    {
        add_action('admin_enqueue_scripts', array($this, 'enqueue'));
    }

    function enqueue()
    {
        wp_enqueue_style('my-style', PEF_PLUGIN_URL . '/assets/my-style.css');
        wp_enqueue_script('my-script', PEF_PLUGIN_URL .'/assets/my-script.js');
    }
}
