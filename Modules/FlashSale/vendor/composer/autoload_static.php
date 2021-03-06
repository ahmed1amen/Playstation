<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcaabb624dbea5dbe518405a4d24537f7
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Modules\\FlashSale\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Modules\\FlashSale\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Modules\\FlashSale\\Admin\\FlashSaleTabs' => __DIR__ . '/../..' . '/Admin/FlashSaleTabs.php',
        'Modules\\FlashSale\\Database\\Seeders\\FlashSaleDatabaseSeeder' => __DIR__ . '/../..' . '/Database/Seeders/FlashSaleDatabaseSeeder.php',
        'Modules\\FlashSale\\Entities\\FlashSale' => __DIR__ . '/../..' . '/Entities/FlashSale.php',
        'Modules\\FlashSale\\Entities\\FlashSaleProduct' => __DIR__ . '/../..' . '/Entities/FlashSaleProduct.php',
        'Modules\\FlashSale\\Entities\\FlashSaleTranslation' => __DIR__ . '/../..' . '/Entities/FlashSaleTranslation.php',
        'Modules\\FlashSale\\Http\\Controllers\\Admin\\FlashSaleController' => __DIR__ . '/../..' . '/Http/Controllers/Admin/FlashSaleController.php',
        'Modules\\FlashSale\\Http\\Requests\\SaveFlashSaleRequest' => __DIR__ . '/../..' . '/Http/Requests/SaveFlashSaleRequest.php',
        'Modules\\FlashSale\\Providers\\FlashSaleServiceProvider' => __DIR__ . '/../..' . '/Providers/FlashSaleServiceProvider.php',
        'Modules\\FlashSale\\Sidebar\\SidebarExtender' => __DIR__ . '/../..' . '/Sidebar/SidebarExtender.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcaabb624dbea5dbe518405a4d24537f7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcaabb624dbea5dbe518405a4d24537f7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcaabb624dbea5dbe518405a4d24537f7::$classMap;

        }, null, ClassLoader::class);
    }
}
