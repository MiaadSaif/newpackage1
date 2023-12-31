<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit60ff4d61a38265debb4ccd37e28d537f
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acaothman\\Contact\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acaothman\\Contact\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit60ff4d61a38265debb4ccd37e28d537f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit60ff4d61a38265debb4ccd37e28d537f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit60ff4d61a38265debb4ccd37e28d537f::$classMap;

        }, null, ClassLoader::class);
    }
}
