<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbf94bc19a2c68971adef8b4b01e19062
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\utils\\' => 10,
            'App\\src\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\utils\\' => 
        array (
            0 => __DIR__ . '/../..' . '/utils',
        ),
        'App\\src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbf94bc19a2c68971adef8b4b01e19062::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbf94bc19a2c68971adef8b4b01e19062::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
