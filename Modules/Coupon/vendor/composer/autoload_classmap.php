<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'Modules\\Coupon\\Admin\\CouponTable' => $baseDir . '/Admin/CouponTable.php',
    'Modules\\Coupon\\Admin\\CouponTabs' => $baseDir . '/Admin/CouponTabs.php',
    'Modules\\Coupon\\Checkers\\AlreadyApplied' => $baseDir . '/Checkers/AlreadyApplied.php',
    'Modules\\Coupon\\Checkers\\ApplicableCategories' => $baseDir . '/Checkers/ApplicableCategories.php',
    'Modules\\Coupon\\Checkers\\ApplicableProducts' => $baseDir . '/Checkers/ApplicableProducts.php',
    'Modules\\Coupon\\Checkers\\CouponExists' => $baseDir . '/Checkers/CouponExists.php',
    'Modules\\Coupon\\Checkers\\ExcludedCategories' => $baseDir . '/Checkers/ExcludedCategories.php',
    'Modules\\Coupon\\Checkers\\ExcludedProducts' => $baseDir . '/Checkers/ExcludedProducts.php',
    'Modules\\Coupon\\Checkers\\MaximumSpend' => $baseDir . '/Checkers/MaximumSpend.php',
    'Modules\\Coupon\\Checkers\\MinimumSpend' => $baseDir . '/Checkers/MinimumSpend.php',
    'Modules\\Coupon\\Checkers\\UsageLimitPerCoupon' => $baseDir . '/Checkers/UsageLimitPerCoupon.php',
    'Modules\\Coupon\\Checkers\\UsageLimitPerCustomer' => $baseDir . '/Checkers/UsageLimitPerCustomer.php',
    'Modules\\Coupon\\Checkers\\ValidCoupon' => $baseDir . '/Checkers/ValidCoupon.php',
    'Modules\\Coupon\\Database\\Seeders\\CouponDatabaseSeeder' => $baseDir . '/Database/Seeders/CouponDatabaseSeeder.php',
    'Modules\\Coupon\\Entities\\Concerns\\RelationList' => $baseDir . '/Entities/Concerns/RelationList.php',
    'Modules\\Coupon\\Entities\\Concerns\\SyncRelations' => $baseDir . '/Entities/Concerns/SyncRelations.php',
    'Modules\\Coupon\\Entities\\Coupon' => $baseDir . '/Entities/Coupon.php',
    'Modules\\Coupon\\Entities\\CouponTranslation' => $baseDir . '/Entities/CouponTranslation.php',
    'Modules\\Coupon\\Exceptions\\CouponAlreadyAppliedException' => $baseDir . '/Exceptions/CouponAlreadyAppliedException.php',
    'Modules\\Coupon\\Exceptions\\CouponNotExistsException' => $baseDir . '/Exceptions/CouponNotExistsException.php',
    'Modules\\Coupon\\Exceptions\\CouponUsageLimitReachedException' => $baseDir . '/Exceptions/CouponUsageLimitReachedException.php',
    'Modules\\Coupon\\Exceptions\\InapplicableCouponException' => $baseDir . '/Exceptions/InapplicableCouponException.php',
    'Modules\\Coupon\\Exceptions\\InvalidCouponException' => $baseDir . '/Exceptions/InvalidCouponException.php',
    'Modules\\Coupon\\Exceptions\\MaximumSpendException' => $baseDir . '/Exceptions/MaximumSpendException.php',
    'Modules\\Coupon\\Exceptions\\MinimumSpendException' => $baseDir . '/Exceptions/MinimumSpendException.php',
    'Modules\\Coupon\\Http\\Controllers\\Admin\\CouponController' => $baseDir . '/Http/Controllers/Admin/CouponController.php',
    'Modules\\Coupon\\Http\\Controllers\\CartCouponController' => $baseDir . '/Http/Controllers/CartCouponController.php',
    'Modules\\Coupon\\Http\\Requests\\SaveCouponRequest' => $baseDir . '/Http/Requests/SaveCouponRequest.php',
    'Modules\\Coupon\\Providers\\CouponServiceProvider' => $baseDir . '/Providers/CouponServiceProvider.php',
    'Modules\\Coupon\\Sidebar\\SidebarExtender' => $baseDir . '/Sidebar/SidebarExtender.php',
);