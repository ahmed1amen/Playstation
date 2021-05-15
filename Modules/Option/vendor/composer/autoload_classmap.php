<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'Modules\\Option\\Admin\\OptionTable' => $baseDir . '/Admin/OptionTable.php',
    'Modules\\Option\\Admin\\OptionTabs' => $baseDir . '/Admin/OptionTabs.php',
    'Modules\\Option\\Admin\\ProductTabsExtender' => $baseDir . '/Admin/ProductTabsExtender.php',
    'Modules\\Option\\Database\\Seeders\\OptionDatabaseSeeder' => $baseDir . '/Database/Seeders/OptionDatabaseSeeder.php',
    'Modules\\Option\\Entities\\Option' => $baseDir . '/Entities/Option.php',
    'Modules\\Option\\Entities\\OptionTranslation' => $baseDir . '/Entities/OptionTranslation.php',
    'Modules\\Option\\Entities\\OptionValue' => $baseDir . '/Entities/OptionValue.php',
    'Modules\\Option\\Entities\\OptionValueTranslation' => $baseDir . '/Entities/OptionValueTranslation.php',
    'Modules\\Option\\Http\\Controllers\\Admin\\OptionController' => $baseDir . '/Http/Controllers/Admin/OptionController.php',
    'Modules\\Option\\Http\\Requests\\SaveOptionRequest' => $baseDir . '/Http/Requests/SaveOptionRequest.php',
    'Modules\\Option\\Http\\Requests\\SaveProductOptionsRequest' => $baseDir . '/Http/Requests/SaveProductOptionsRequest.php',
    'Modules\\Option\\Listeners\\SaveProductOptions' => $baseDir . '/Listeners/SaveProductOptions.php',
    'Modules\\Option\\Providers\\EventServiceProvider' => $baseDir . '/Providers/EventServiceProvider.php',
    'Modules\\Option\\Providers\\OptionServiceProvider' => $baseDir . '/Providers/OptionServiceProvider.php',
    'Modules\\Option\\Sidebar\\SidebarExtender' => $baseDir . '/Sidebar/SidebarExtender.php',
);