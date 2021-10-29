<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita7b98f0c0ee2eb54732d984cdaecb64c
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita7b98f0c0ee2eb54732d984cdaecb64c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita7b98f0c0ee2eb54732d984cdaecb64c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita7b98f0c0ee2eb54732d984cdaecb64c::$classMap;

        }, null, ClassLoader::class);
    }
}
