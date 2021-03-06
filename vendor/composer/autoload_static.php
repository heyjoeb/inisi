<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcf3986fa3b00252919fa39e8c220872e
{
    public static $files = array (
        '6d5dc685b6deb7007a762fe794aa9fea' => __DIR__ . '/..' . '/level-level/clarkson-hooks/clarkson-hooks.php',
    );

    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hooks\\' => 6,
        ),
        'C' => 
        array (
            'Clarkson\\Hooks\\' => 15,
            'Clarkson\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hooks\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Hooks',
        ),
        'Clarkson\\Hooks\\' => 
        array (
            0 => __DIR__ . '/..' . '/level-level/clarkson-hooks/src',
        ),
        'Clarkson\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Clarkson',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcf3986fa3b00252919fa39e8c220872e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcf3986fa3b00252919fa39e8c220872e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
