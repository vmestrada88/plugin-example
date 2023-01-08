<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit82250ba23a09a7fa4c7e5d520b3c6e73
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit82250ba23a09a7fa4c7e5d520b3c6e73', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit82250ba23a09a7fa4c7e5d520b3c6e73', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit82250ba23a09a7fa4c7e5d520b3c6e73::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit82250ba23a09a7fa4c7e5d520b3c6e73::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire82250ba23a09a7fa4c7e5d520b3c6e73($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire82250ba23a09a7fa4c7e5d520b3c6e73($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}