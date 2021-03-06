<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit50266e1dba4689a71a9dff014f8b8a2a
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit50266e1dba4689a71a9dff014f8b8a2a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit50266e1dba4689a71a9dff014f8b8a2a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
