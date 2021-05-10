<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'Modules\\Cart\\Cart' => $baseDir . '/Cart.php',
    'Modules\\Cart\\CartCondition' => $baseDir . '/CartCondition.php',
    'Modules\\Cart\\CartCoupon' => $baseDir . '/CartCoupon.php',
    'Modules\\Cart\\CartItem' => $baseDir . '/CartItem.php',
    'Modules\\Cart\\CartShippingMethod' => $baseDir . '/CartShippingMethod.php',
    'Modules\\Cart\\CartTax' => $baseDir . '/CartTax.php',
    'Modules\\Cart\\Facades\\Cart' => $baseDir . '/Facades/Cart.php',
    'Modules\\Cart\\Http\\Controllers\\CartClearController' => $baseDir . '/Http/Controllers/CartClearController.php',
    'Modules\\Cart\\Http\\Controllers\\CartController' => $baseDir . '/Http/Controllers/CartController.php',
    'Modules\\Cart\\Http\\Controllers\\CartCrossSellProductsController' => $baseDir . '/Http/Controllers/CartCrossSellProductsController.php',
    'Modules\\Cart\\Http\\Controllers\\CartItemController' => $baseDir . '/Http/Controllers/CartItemController.php',
    'Modules\\Cart\\Http\\Controllers\\CartShippingMethodController' => $baseDir . '/Http/Controllers/CartShippingMethodController.php',
    'Modules\\Cart\\Http\\Middleware\\CheckCartStock' => $baseDir . '/Http/Middleware/CheckCartStock.php',
    'Modules\\Cart\\Http\\Middleware\\CheckCouponUsageLimit' => $baseDir . '/Http/Middleware/CheckCouponUsageLimit.php',
    'Modules\\Cart\\Http\\Middleware\\CheckProductIsInStock' => $baseDir . '/Http/Middleware/CheckProductIsInStock.php',
    'Modules\\Cart\\Http\\Middleware\\RedirectIfCartIsEmpty' => $baseDir . '/Http/Middleware/RedirectIfCartIsEmpty.php',
    'Modules\\Cart\\Http\\Requests\\StoreCartItemRequest' => $baseDir . '/Http/Requests/StoreCartItemRequest.php',
    'Modules\\Cart\\Listeners\\ClearCart' => $baseDir . '/Listeners/ClearCart.php',
    'Modules\\Cart\\NullCartCoupon' => $baseDir . '/NullCartCoupon.php',
    'Modules\\Cart\\NullCartShippingMethod' => $baseDir . '/NullCartShippingMethod.php',
    'Modules\\Cart\\Providers\\CartServiceProvider' => $baseDir . '/Providers/CartServiceProvider.php',
    'Modules\\Cart\\Providers\\EventServiceProvider' => $baseDir . '/Providers/EventServiceProvider.php',
);
