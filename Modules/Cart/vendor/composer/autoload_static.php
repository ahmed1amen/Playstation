<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitabcc5654c02b7c3dd88e6c949c1c507c
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Modules\\Cart\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Modules\\Cart\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Modules\\Cart\\Cart' => __DIR__ . '/../..' . '/Cart.php',
        'Modules\\Cart\\CartCondition' => __DIR__ . '/../..' . '/CartCondition.php',
        'Modules\\Cart\\CartCoupon' => __DIR__ . '/../..' . '/CartCoupon.php',
        'Modules\\Cart\\CartItem' => __DIR__ . '/../..' . '/CartItem.php',
        'Modules\\Cart\\CartShippingMethod' => __DIR__ . '/../..' . '/CartShippingMethod.php',
        'Modules\\Cart\\CartTax' => __DIR__ . '/../..' . '/CartTax.php',
        'Modules\\Cart\\Facades\\Cart' => __DIR__ . '/../..' . '/Facades/Cart.php',
        'Modules\\Cart\\Http\\Controllers\\CartClearController' => __DIR__ . '/../..' . '/Http/Controllers/CartClearController.php',
        'Modules\\Cart\\Http\\Controllers\\CartController' => __DIR__ . '/../..' . '/Http/Controllers/CartController.php',
        'Modules\\Cart\\Http\\Controllers\\CartCrossSellProductsController' => __DIR__ . '/../..' . '/Http/Controllers/CartCrossSellProductsController.php',
        'Modules\\Cart\\Http\\Controllers\\CartItemController' => __DIR__ . '/../..' . '/Http/Controllers/CartItemController.php',
        'Modules\\Cart\\Http\\Controllers\\CartShippingMethodController' => __DIR__ . '/../..' . '/Http/Controllers/CartShippingMethodController.php',
        'Modules\\Cart\\Http\\Middleware\\CheckCartStock' => __DIR__ . '/../..' . '/Http/Middleware/CheckCartStock.php',
        'Modules\\Cart\\Http\\Middleware\\CheckCouponUsageLimit' => __DIR__ . '/../..' . '/Http/Middleware/CheckCouponUsageLimit.php',
        'Modules\\Cart\\Http\\Middleware\\CheckProductIsInStock' => __DIR__ . '/../..' . '/Http/Middleware/CheckProductIsInStock.php',
        'Modules\\Cart\\Http\\Middleware\\RedirectIfCartIsEmpty' => __DIR__ . '/../..' . '/Http/Middleware/RedirectIfCartIsEmpty.php',
        'Modules\\Cart\\Http\\Requests\\StoreCartItemRequest' => __DIR__ . '/../..' . '/Http/Requests/StoreCartItemRequest.php',
        'Modules\\Cart\\Listeners\\ClearCart' => __DIR__ . '/../..' . '/Listeners/ClearCart.php',
        'Modules\\Cart\\NullCartCoupon' => __DIR__ . '/../..' . '/NullCartCoupon.php',
        'Modules\\Cart\\NullCartShippingMethod' => __DIR__ . '/../..' . '/NullCartShippingMethod.php',
        'Modules\\Cart\\Providers\\CartServiceProvider' => __DIR__ . '/../..' . '/Providers/CartServiceProvider.php',
        'Modules\\Cart\\Providers\\EventServiceProvider' => __DIR__ . '/../..' . '/Providers/EventServiceProvider.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitabcc5654c02b7c3dd88e6c949c1c507c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitabcc5654c02b7c3dd88e6c949c1c507c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitabcc5654c02b7c3dd88e6c949c1c507c::$classMap;

        }, null, ClassLoader::class);
    }
}