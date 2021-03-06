<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6232c9f23b8da3d9fc58449333280f5e
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Keboola\\Csv\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Keboola\\Csv\\' => 
        array (
            0 => __DIR__ . '/..' . '/keboola/csv/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6232c9f23b8da3d9fc58449333280f5e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6232c9f23b8da3d9fc58449333280f5e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
