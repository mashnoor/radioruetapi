<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2a05cf06574255c7fb09ca9b2a2cfa99
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2a05cf06574255c7fb09ca9b2a2cfa99::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2a05cf06574255c7fb09ca9b2a2cfa99::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
