<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8025f4bb8483ac516e227aa6fa79a23e
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8025f4bb8483ac516e227aa6fa79a23e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8025f4bb8483ac516e227aa6fa79a23e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
