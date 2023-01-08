<?php

/**
 *This is my basic plugin
 * 
 * @package PluginExample
 */

namespace src\api\Callbacks;

class ManagerCallbacks
{
    public function checkbox_sanitize($input)
    {
        return (isset($input) ? true : false);
    }

    public function admin_section_manager()
    {
        echo 'Manage the Sections and Features of this Plugin by activating the checkboxes from the following list.';
    }

    public function checkbox_field($args)
    {
        $name = $args['label_for'];
        $classes = $args['class'];
        $checkbox = get_option($name);
        echo '<input type="checkbox" name="' . $name . '" value="1" class="' . $classes . '" ' . ($checkbox ? 'checked' : '') . '>';
    }
}
