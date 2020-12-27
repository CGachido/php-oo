<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInited6c5bc2c5a701c7d3806ed819714178
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInited6c5bc2c5a701c7d3806ed819714178::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInited6c5bc2c5a701c7d3806ed819714178::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInited6c5bc2c5a701c7d3806ed819714178::$classMap;

        }, null, ClassLoader::class);
    }
}