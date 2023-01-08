<?php

/**
 * @package PluginExample
 */
namespace src\base;

class Activate
{
    public static function activate()
    {

        update_option('pef_version', '1.0.0');

        flush_rewrite_rules();
    }
}