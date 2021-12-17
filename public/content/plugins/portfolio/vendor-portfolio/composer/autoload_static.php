<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd91d11696608ae23dd26f5da2903ee3f
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Portfolio\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Portfolio\\' => 
        array (
            0 => __DIR__ . '/../..' . '/class',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd91d11696608ae23dd26f5da2903ee3f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd91d11696608ae23dd26f5da2903ee3f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
