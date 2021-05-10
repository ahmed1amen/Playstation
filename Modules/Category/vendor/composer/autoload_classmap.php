<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'Modules\\Category\\Database\\Seeders\\CategoryDatabaseSeeder' => $baseDir . '/Database/Seeders/CategoryDatabaseSeeder.php',
    'Modules\\Category\\Entities\\Category' => $baseDir . '/Entities/Category.php',
    'Modules\\Category\\Entities\\CategoryTranslation' => $baseDir . '/Entities/CategoryTranslation.php',
    'Modules\\Category\\Http\\Controllers\\Admin\\CategoryController' => $baseDir . '/Http/Controllers/Admin/CategoryController.php',
    'Modules\\Category\\Http\\Controllers\\Admin\\CategoryTreeController' => $baseDir . '/Http/Controllers/Admin/CategoryTreeController.php',
    'Modules\\Category\\Http\\Controllers\\CategoryController' => $baseDir . '/Http/Controllers/CategoryController.php',
    'Modules\\Category\\Http\\Controllers\\CategoryProductController' => $baseDir . '/Http/Controllers/CategoryProductController.php',
    'Modules\\Category\\Http\\Requests\\SaveCategoryRequest' => $baseDir . '/Http/Requests/SaveCategoryRequest.php',
    'Modules\\Category\\Http\\Responses\\CategoryTreeResponse' => $baseDir . '/Http/Responses/CategoryTreeResponse.php',
    'Modules\\Category\\Providers\\CategoryServiceProvider' => $baseDir . '/Providers/CategoryServiceProvider.php',
    'Modules\\Category\\Services\\CategoryTreeUpdater' => $baseDir . '/Services/CategoryTreeUpdater.php',
    'Modules\\Category\\Sidebar\\SidebarExtender' => $baseDir . '/Sidebar/SidebarExtender.php',
);
