<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc86af4473d1a0966c152e87016ba41aa
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

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/..' . '/ehime/hello-world/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc86af4473d1a0966c152e87016ba41aa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc86af4473d1a0966c152e87016ba41aa::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc86af4473d1a0966c152e87016ba41aa::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
