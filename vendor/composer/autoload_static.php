<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0638b8d70b79763db4853ef5c0acd136
{
    public static $prefixLengthsPsr4 = array (
        'f' => 
        array (
            'flytoper\\pac\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'flytoper\\pac\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0638b8d70b79763db4853ef5c0acd136::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0638b8d70b79763db4853ef5c0acd136::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
