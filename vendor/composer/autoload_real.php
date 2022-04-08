<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitf9870f010414facc01f5ca97c53d6d6a
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

        spl_autoload_register(array('ComposerAutoloaderInitf9870f010414facc01f5ca97c53d6d6a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitf9870f010414facc01f5ca97c53d6d6a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        \Composer\Autoload\ComposerStaticInitf9870f010414facc01f5ca97c53d6d6a::getInitializer($loader)();

        $loader->register(true);

        return $loader;
    }
}
