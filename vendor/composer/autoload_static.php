<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdec09fd67f9b093c99d927d7d186d5ca
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MF\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MF\\' => 
        array (
            0 => __DIR__ . '/..' . '/MF',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdec09fd67f9b093c99d927d7d186d5ca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdec09fd67f9b093c99d927d7d186d5ca::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdec09fd67f9b093c99d927d7d186d5ca::$classMap;

        }, null, ClassLoader::class);
    }
}
