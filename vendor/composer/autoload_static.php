<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd632a79ef45204ea50723cd73d345e8b
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

    public static $classMap = array (
        'AltoRouter' => __DIR__ . '/..' . '/altorouter/altorouter/AltoRouter.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd632a79ef45204ea50723cd73d345e8b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd632a79ef45204ea50723cd73d345e8b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd632a79ef45204ea50723cd73d345e8b::$classMap;

        }, null, ClassLoader::class);
    }
}