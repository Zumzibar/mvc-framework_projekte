<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit48af99d27bcf3be0ac9fa06609f4cb0a
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'mvc_sixth\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'mvc_sixth\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
            1 => __DIR__ . '/../..' . '/template',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit48af99d27bcf3be0ac9fa06609f4cb0a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit48af99d27bcf3be0ac9fa06609f4cb0a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit48af99d27bcf3be0ac9fa06609f4cb0a::$classMap;

        }, null, ClassLoader::class);
    }
}
