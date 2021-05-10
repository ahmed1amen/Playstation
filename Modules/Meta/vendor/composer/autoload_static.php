<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit394d6c7c862cf453afb714ed9aa9ea6a
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Modules\\Meta\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Modules\\Meta\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Modules\\Meta\\Eloquent\\HasMetaData' => __DIR__ . '/../..' . '/Eloquent/HasMetaData.php',
        'Modules\\Meta\\Entities\\MetaData' => __DIR__ . '/../..' . '/Entities/MetaData.php',
        'Modules\\Meta\\Entities\\MetaDataTranslation' => __DIR__ . '/../..' . '/Entities/MetaDataTranslation.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit394d6c7c862cf453afb714ed9aa9ea6a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit394d6c7c862cf453afb714ed9aa9ea6a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit394d6c7c862cf453afb714ed9aa9ea6a::$classMap;

        }, null, ClassLoader::class);
    }
}
