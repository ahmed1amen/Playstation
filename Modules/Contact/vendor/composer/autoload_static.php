<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit23f96f1b4ba9bddee73805d4b58e7bdb
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Modules\\Contact\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Modules\\Contact\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Modules\\Contact\\Http\\Controllers\\ContactController' => __DIR__ . '/../..' . '/Http/Controllers/ContactController.php',
        'Modules\\Contact\\Http\\Requests\\ContactRequest' => __DIR__ . '/../..' . '/Http/Requests/ContactRequest.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit23f96f1b4ba9bddee73805d4b58e7bdb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit23f96f1b4ba9bddee73805d4b58e7bdb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit23f96f1b4ba9bddee73805d4b58e7bdb::$classMap;

        }, null, ClassLoader::class);
    }
}
