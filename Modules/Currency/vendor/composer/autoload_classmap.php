<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Modules\\Currency\\Admin\\CurrencyRateTable' => $baseDir . '/Admin/CurrencyRateTable.php',
    'Modules\\Currency\\Admin\\CurrencyRateTabs' => $baseDir . '/Admin/CurrencyRateTabs.php',
    'Modules\\Currency\\Console\\RefreshCurrencyRatesCommand' => $baseDir . '/Console/RefreshCurrencyRatesCommand.php',
    'Modules\\Currency\\Currency' => $baseDir . '/Currency.php',
    'Modules\\Currency\\Database\\Seeders\\CurrencyDatabaseSeeder' => $baseDir . '/Database/Seeders/CurrencyDatabaseSeeder.php',
    'Modules\\Currency\\Entities\\CurrencyRate' => $baseDir . '/Entities/CurrencyRate.php',
    'Modules\\Currency\\Http\\Controllers\\Admin\\CurrencyRateController' => $baseDir . '/Http/Controllers/Admin/CurrencyRateController.php',
    'Modules\\Currency\\Http\\Controllers\\CurrentCurrencyController' => $baseDir . '/Http/Controllers/CurrentCurrencyController.php',
    'Modules\\Currency\\Http\\Requests\\UpdateCurrencyRateRequest' => $baseDir . '/Http/Requests/UpdateCurrencyRateRequest.php',
    'Modules\\Currency\\Listeners\\CreateCurrencyRates' => $baseDir . '/Listeners/CreateCurrencyRates.php',
    'Modules\\Currency\\Providers\\CurrencyExchangeRateServiceProvider' => $baseDir . '/Providers/CurrencyExchangeRateServiceProvider.php',
    'Modules\\Currency\\Providers\\CurrencyServiceProvider' => $baseDir . '/Providers/CurrencyServiceProvider.php',
    'Modules\\Currency\\Providers\\EventServiceProvider' => $baseDir . '/Providers/EventServiceProvider.php',
    'Modules\\Currency\\Services\\CurrencyRateExchanger' => $baseDir . '/Services/CurrencyRateExchanger.php',
    'Modules\\Currency\\Sidebar\\SidebarExtender' => $baseDir . '/Sidebar/SidebarExtender.php',
);
