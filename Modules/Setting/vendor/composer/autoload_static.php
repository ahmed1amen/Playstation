<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8fcedff8f493215f5e9971c93ed708f6
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Modules\\Setting\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Modules\\Setting\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Modules\\Setting\\Admin\\SettingTabs' => __DIR__ . '/../..' . '/Admin/SettingTabs.php',
        'Modules\\Setting\\Database\\Seeders\\SettingDatabaseSeeder' => __DIR__ . '/../..' . '/Database/Seeders/SettingDatabaseSeeder.php',
        'Modules\\Setting\\Entities\\Setting' => __DIR__ . '/../..' . '/Entities/Setting.php',
        'Modules\\Setting\\Entities\\SettingTranslation' => __DIR__ . '/../..' . '/Entities/SettingTranslation.php',
        'Modules\\Setting\\Events\\SettingSaved' => __DIR__ . '/../..' . '/Events/SettingSaved.php',
        'Modules\\Setting\\Http\\Controllers\\Admin\\SettingController' => __DIR__ . '/../..' . '/Http/Controllers/Admin/SettingController.php',
        'Modules\\Setting\\Http\\Requests\\UpdateSettingRequest' => __DIR__ . '/../..' . '/Http/Requests/UpdateSettingRequest.php',
        'Modules\\Setting\\Listeners\\ClearSettingCache' => __DIR__ . '/../..' . '/Listeners/ClearSettingCache.php',
        'Modules\\Setting\\Providers\\EventServiceProvider' => __DIR__ . '/../..' . '/Providers/EventServiceProvider.php',
        'Modules\\Setting\\Providers\\SettingServiceProvider' => __DIR__ . '/../..' . '/Providers/SettingServiceProvider.php',
        'Modules\\Setting\\Repository' => __DIR__ . '/../..' . '/Repository.php',
        'Modules\\Setting\\Sidebar\\SidebarExtender' => __DIR__ . '/../..' . '/Sidebar/SidebarExtender.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8fcedff8f493215f5e9971c93ed708f6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8fcedff8f493215f5e9971c93ed708f6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8fcedff8f493215f5e9971c93ed708f6::$classMap;

        }, null, ClassLoader::class);
    }
}
