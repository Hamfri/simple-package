<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit29b9618019d534da5b1cbc25f6a3da03
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SimplePackage\\ForComposer\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SimplePackage\\ForComposer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit29b9618019d534da5b1cbc25f6a3da03::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit29b9618019d534da5b1cbc25f6a3da03::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
