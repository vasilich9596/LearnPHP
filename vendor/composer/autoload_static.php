<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit244cab65fbb54d0ef209ad514f884dd4
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'App\\Router' => __DIR__ . '/../..' . '/App/Router.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit244cab65fbb54d0ef209ad514f884dd4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit244cab65fbb54d0ef209ad514f884dd4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit244cab65fbb54d0ef209ad514f884dd4::$classMap;

        }, null, ClassLoader::class);
    }
}
