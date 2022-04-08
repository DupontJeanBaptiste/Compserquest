<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf9870f010414facc01f5ca97c53d6d6a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf9870f010414facc01f5ca97c53d6d6a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf9870f010414facc01f5ca97c53d6d6a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf9870f010414facc01f5ca97c53d6d6a::$classMap;

        }, null, ClassLoader::class);
    }
}
