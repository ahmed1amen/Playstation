<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbeff0ff5165655493de2dd6e02613a84
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Modules\\User\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Modules\\User\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Modules\\User\\Admin\\ProfileTabs' => __DIR__ . '/../..' . '/Admin/ProfileTabs.php',
        'Modules\\User\\Admin\\RoleTabs' => __DIR__ . '/../..' . '/Admin/RoleTabs.php',
        'Modules\\User\\Admin\\UserTable' => __DIR__ . '/../..' . '/Admin/UserTable.php',
        'Modules\\User\\Admin\\UserTabs' => __DIR__ . '/../..' . '/Admin/UserTabs.php',
        'Modules\\User\\Contracts\\Authentication' => __DIR__ . '/../..' . '/Contracts/Authentication.php',
        'Modules\\User\\Database\\Seeders\\RolesTableSeeder' => __DIR__ . '/../..' . '/Database/Seeders/RolesTableSeeder.php',
        'Modules\\User\\Database\\Seeders\\UserDatabaseSeeder' => __DIR__ . '/../..' . '/Database/Seeders/UserDatabaseSeeder.php',
        'Modules\\User\\Database\\Seeders\\UsersTableSeeder' => __DIR__ . '/../..' . '/Database/Seeders/UsersTableSeeder.php',
        'Modules\\User\\Entities\\Role' => __DIR__ . '/../..' . '/Entities/Role.php',
        'Modules\\User\\Entities\\RoleTranslation' => __DIR__ . '/../..' . '/Entities/RoleTranslation.php',
        'Modules\\User\\Entities\\User' => __DIR__ . '/../..' . '/Entities/User.php',
        'Modules\\User\\Events\\CustomerRegistered' => __DIR__ . '/../..' . '/Events/CustomerRegistered.php',
        'Modules\\User\\Events\\UserHasActivatedAccount' => __DIR__ . '/../..' . '/Events/UserHasActivatedAccount.php',
        'Modules\\User\\Events\\UserHasRegistered' => __DIR__ . '/../..' . '/Events/UserHasRegistered.php',
        'Modules\\User\\Guards\\Sentinel' => __DIR__ . '/../..' . '/Guards/Sentinel.php',
        'Modules\\User\\Http\\Controllers\\Admin\\AuthController' => __DIR__ . '/../..' . '/Http/Controllers/Admin/AuthController.php',
        'Modules\\User\\Http\\Controllers\\Admin\\ProfileController' => __DIR__ . '/../..' . '/Http/Controllers/Admin/ProfileController.php',
        'Modules\\User\\Http\\Controllers\\Admin\\RoleController' => __DIR__ . '/../..' . '/Http/Controllers/Admin/RoleController.php',
        'Modules\\User\\Http\\Controllers\\Admin\\UserController' => __DIR__ . '/../..' . '/Http/Controllers/Admin/UserController.php',
        'Modules\\User\\Http\\Controllers\\Admin\\UserResetPasswordController' => __DIR__ . '/../..' . '/Http/Controllers/Admin/UserResetPasswordController.php',
        'Modules\\User\\Http\\Controllers\\AuthController' => __DIR__ . '/../..' . '/Http/Controllers/AuthController.php',
        'Modules\\User\\Http\\Controllers\\BaseAuthController' => __DIR__ . '/../..' . '/Http/Controllers/BaseAuthController.php',
        'Modules\\User\\Http\\Requests\\LoginRequest' => __DIR__ . '/../..' . '/Http/Requests/LoginRequest.php',
        'Modules\\User\\Http\\Requests\\PasswordResetRequest' => __DIR__ . '/../..' . '/Http/Requests/PasswordResetRequest.php',
        'Modules\\User\\Http\\Requests\\RegisterRequest' => __DIR__ . '/../..' . '/Http/Requests/RegisterRequest.php',
        'Modules\\User\\Http\\Requests\\ResetCompleteRequest' => __DIR__ . '/../..' . '/Http/Requests/ResetCompleteRequest.php',
        'Modules\\User\\Http\\Requests\\SaveRoleRequest' => __DIR__ . '/../..' . '/Http/Requests/SaveRoleRequest.php',
        'Modules\\User\\Http\\Requests\\SaveUserRequest' => __DIR__ . '/../..' . '/Http/Requests/SaveUserRequest.php',
        'Modules\\User\\Http\\Requests\\UpdateProfileRequest' => __DIR__ . '/../..' . '/Http/Requests/UpdateProfileRequest.php',
        'Modules\\User\\Http\\ViewComposers\\CurrentUserComposer' => __DIR__ . '/../..' . '/Http/ViewComposers/CurrentUserComposer.php',
        'Modules\\User\\Listeners\\SendWelcomeEmail' => __DIR__ . '/../..' . '/Listeners/SendWelcomeEmail.php',
        'Modules\\User\\Listeners\\SendWelcomeSms' => __DIR__ . '/../..' . '/Listeners/SendWelcomeSms.php',
        'Modules\\User\\LoginProvider' => __DIR__ . '/../..' . '/LoginProvider.php',
        'Modules\\User\\Mail\\ResetPasswordEmail' => __DIR__ . '/../..' . '/Mail/ResetPasswordEmail.php',
        'Modules\\User\\Mail\\Welcome' => __DIR__ . '/../..' . '/Mail/Welcome.php',
        'Modules\\User\\Providers\\EventServiceProvider' => __DIR__ . '/../..' . '/Providers/EventServiceProvider.php',
        'Modules\\User\\Providers\\SocialLoginServiceProvider' => __DIR__ . '/../..' . '/Providers/SocialLoginServiceProvider.php',
        'Modules\\User\\Providers\\UserServiceProvider' => __DIR__ . '/../..' . '/Providers/UserServiceProvider.php',
        'Modules\\User\\Repositories\\Permission' => __DIR__ . '/../..' . '/Repositories/Permission.php',
        'Modules\\User\\Sentinel\\SentinelAuthentication' => __DIR__ . '/../..' . '/Sentinel/SentinelAuthentication.php',
        'Modules\\User\\Services\\CustomerService' => __DIR__ . '/../..' . '/Services/CustomerService.php',
        'Modules\\User\\Sidebar\\SidebarExtender' => __DIR__ . '/../..' . '/Sidebar/SidebarExtender.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbeff0ff5165655493de2dd6e02613a84::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbeff0ff5165655493de2dd6e02613a84::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbeff0ff5165655493de2dd6e02613a84::$classMap;

        }, null, ClassLoader::class);
    }
}
