<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4bb87315460fb642d72f87484faeef28
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Modules\\Shipping\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Modules\\Shipping\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Modules\\Shipping\\Facades\\ShippingMethod' => __DIR__ . '/../..' . '/Facades/ShippingMethod.php',
        'Modules\\Shipping\\Method' => __DIR__ . '/../..' . '/Method.php',
        'Modules\\Shipping\\Providers\\ShippingServiceProvider' => __DIR__ . '/../..' . '/Providers/ShippingServiceProvider.php',
        'Modules\\Shipping\\ShippingMethodManager' => __DIR__ . '/../..' . '/ShippingMethodManager.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4bb87315460fb642d72f87484faeef28::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4bb87315460fb642d72f87484faeef28::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4bb87315460fb642d72f87484faeef28::$classMap;

        }, null, ClassLoader::class);
    }
}
