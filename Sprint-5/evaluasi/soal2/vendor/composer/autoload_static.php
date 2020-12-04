<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit49a9ff5da723ed7d66f0d3ac4e97b743
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'View\\' => 5,
        ),
        'M' => 
        array (
            'Models\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'View\\' => 
        array (
            0 => __DIR__ . '/../..' . '/SRC/App2',
        ),
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/SRC/App1',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit49a9ff5da723ed7d66f0d3ac4e97b743::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit49a9ff5da723ed7d66f0d3ac4e97b743::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
