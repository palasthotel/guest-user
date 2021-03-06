<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf7675cec9cfb50fc35d79deceb5ca9bd
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Palasthotel\\WordPress\\GuestUser\\' => 32,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Palasthotel\\WordPress\\GuestUser\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf7675cec9cfb50fc35d79deceb5ca9bd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf7675cec9cfb50fc35d79deceb5ca9bd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf7675cec9cfb50fc35d79deceb5ca9bd::$classMap;

        }, null, ClassLoader::class);
    }
}
