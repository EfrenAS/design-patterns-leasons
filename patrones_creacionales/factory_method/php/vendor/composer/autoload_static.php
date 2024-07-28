<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit54e8b8001f6411184fe6740e496597ba
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit54e8b8001f6411184fe6740e496597ba::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit54e8b8001f6411184fe6740e496597ba::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit54e8b8001f6411184fe6740e496597ba::$classMap;

        }, null, ClassLoader::class);
    }
}
