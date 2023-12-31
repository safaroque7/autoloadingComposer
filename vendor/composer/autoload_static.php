<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf1713ef1ce32049c4f3ea58d7560ec35
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf1713ef1ce32049c4f3ea58d7560ec35::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf1713ef1ce32049c4f3ea58d7560ec35::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf1713ef1ce32049c4f3ea58d7560ec35::$classMap;

        }, null, ClassLoader::class);
    }
}
