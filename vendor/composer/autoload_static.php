<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit97a340ef3b8803e8265cd4c219d4a698
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core/classes',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit97a340ef3b8803e8265cd4c219d4a698::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit97a340ef3b8803e8265cd4c219d4a698::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
