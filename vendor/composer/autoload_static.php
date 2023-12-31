<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit58ba58601b672fa106d8340ba1adf1ac
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Company\\Utility\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Company\\Utility\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit58ba58601b672fa106d8340ba1adf1ac::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit58ba58601b672fa106d8340ba1adf1ac::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit58ba58601b672fa106d8340ba1adf1ac::$classMap;

        }, null, ClassLoader::class);
    }
}
