<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd5ac66793022370c9486f0d409478f12
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Modules\\Menu\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Modules\\Menu\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Modules\\Menu\\Admin\\MenuItemTabs' => __DIR__ . '/../..' . '/Admin/MenuItemTabs.php',
        'Modules\\Menu\\Database\\Seeders\\MenuDatabaseSeeder' => __DIR__ . '/../..' . '/Database/Seeders/MenuDatabaseSeeder.php',
        'Modules\\Menu\\Entities\\Menu' => __DIR__ . '/../..' . '/Entities/Menu.php',
        'Modules\\Menu\\Entities\\MenuItem' => __DIR__ . '/../..' . '/Entities/MenuItem.php',
        'Modules\\Menu\\Entities\\MenuItemTranslation' => __DIR__ . '/../..' . '/Entities/MenuItemTranslation.php',
        'Modules\\Menu\\Entities\\MenuTranslation' => __DIR__ . '/../..' . '/Entities/MenuTranslation.php',
        'Modules\\Menu\\Events\\Listeners\\CreateRootMenuItem' => __DIR__ . '/../..' . '/Events/Listeners/CreateRootMenuItem.php',
        'Modules\\Menu\\Http\\Controllers\\Admin\\MenuController' => __DIR__ . '/../..' . '/Http/Controllers/Admin/MenuController.php',
        'Modules\\Menu\\Http\\Controllers\\Admin\\MenuItemController' => __DIR__ . '/../..' . '/Http/Controllers/Admin/MenuItemController.php',
        'Modules\\Menu\\Http\\Controllers\\Admin\\MenuItemOrderController' => __DIR__ . '/../..' . '/Http/Controllers/Admin/MenuItemOrderController.php',
        'Modules\\Menu\\Http\\Requests\\SaveMenuItemRequest' => __DIR__ . '/../..' . '/Http/Requests/SaveMenuItemRequest.php',
        'Modules\\Menu\\Http\\Requests\\SaveMenuRequest' => __DIR__ . '/../..' . '/Http/Requests/SaveMenuRequest.php',
        'Modules\\Menu\\MegaMenu\\MegaMenu' => __DIR__ . '/../..' . '/MegaMenu/MegaMenu.php',
        'Modules\\Menu\\MegaMenu\\Menu' => __DIR__ . '/../..' . '/MegaMenu/Menu.php',
        'Modules\\Menu\\MegaMenu\\SubMenu' => __DIR__ . '/../..' . '/MegaMenu/SubMenu.php',
        'Modules\\Menu\\Providers\\EventServiceProvider' => __DIR__ . '/../..' . '/Providers/EventServiceProvider.php',
        'Modules\\Menu\\Providers\\MenuServiceProvider' => __DIR__ . '/../..' . '/Providers/MenuServiceProvider.php',
        'Modules\\Menu\\Services\\MenuItemOrdener' => __DIR__ . '/../..' . '/Services/MenuItemOrdener.php',
        'Modules\\Menu\\Sidebar\\SidebarExtender' => __DIR__ . '/../..' . '/Sidebar/SidebarExtender.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd5ac66793022370c9486f0d409478f12::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd5ac66793022370c9486f0d409478f12::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd5ac66793022370c9486f0d409478f12::$classMap;

        }, null, ClassLoader::class);
    }
}
