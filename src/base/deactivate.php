<?php

/**
 * @package PluginExample
 */
namespace src\base;

class Deactivate
{
    public static function deactivate()
    {
        flush_rewrite_rules();
    }
}