<?php return array (
  'app' => 
  array (
    'name' => 'FleetCart',
    'installed' => true,
    'cache' => true,
    'env' => 'production',
    'debug' => false,
    'url' => 'http://fleetcart.test',
    'timezone' => 'Africa/Cairo',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'key' => 'base64:b5Bw4YnMhoyEl8/TRUidIvR4q18oK1NwAWkCc6iqQFI=',
    'cipher' => 'AES-256-CBC',
    'log' => 'single',
    'log_level' => 'debug',
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      13 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      14 => 'Illuminate\\Queue\\QueueServiceProvider',
      15 => 'Illuminate\\Redis\\RedisServiceProvider',
      16 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      17 => 'Illuminate\\Session\\SessionServiceProvider',
      18 => 'Illuminate\\Translation\\TranslationServiceProvider',
      19 => 'Illuminate\\Validation\\ValidationServiceProvider',
      20 => 'Illuminate\\View\\ViewServiceProvider',
      21 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      22 => 'FleetCart\\Providers\\AppServiceProvider',
      23 => 'FleetCart\\Providers\\RouteServiceProvider',
      24 => 'Nwidart\\Modules\\LaravelModulesServiceProvider',
      25 => 'Mehedi\\Stylist\\StylistServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Redis' => 'Illuminate\\Support\\Facades\\Redis',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Module' => 'Nwidart\\Modules\\Facades\\Module',
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'sentinel',
        'provider' => 'users',
      ),
      'api' => 
      array (
        'driver' => 'token',
        'provider' => 'users',
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'Modules\\User\\Entities\\User',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'email' => 'auth.emails.password',
        'table' => 'password_resets',
        'expire' => 60,
      ),
    ),
  ),
  'broadcasting' => 
  array (
    'default' => 'null',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => NULL,
        'secret' => NULL,
        'app_id' => NULL,
        'options' => 
        array (
          'cluster' => NULL,
          'encrypted' => true,
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => '/media/ahmed/f/Laravel-Projects/FleetCart/storage/framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
    ),
    'prefix' => 'laravel_cache',
  ),
  'cartalyst' => 
  array (
    'sentinel' => 
    array (
      'session' => 'fleetcart_auth',
      'cookie' => 'fleetcart_auth',
      'users' => 
      array (
        'model' => 'Modules\\User\\Entities\\User',
      ),
      'roles' => 
      array (
        'model' => 'Modules\\User\\Entities\\Role',
      ),
      'permissions' => 
      array (
        'class' => 'Cartalyst\\Sentinel\\Permissions\\StandardPermissions',
      ),
      'persistences' => 
      array (
        'model' => 'Cartalyst\\Sentinel\\Persistences\\EloquentPersistence',
        'single' => false,
      ),
      'checkpoints' => 
      array (
        0 => 'throttle',
        1 => 'activation',
      ),
      'activations' => 
      array (
        'model' => 'Cartalyst\\Sentinel\\Activations\\EloquentActivation',
        'expires' => 259200,
        'lottery' => 
        array (
          0 => 2,
          1 => 100,
        ),
      ),
      'reminders' => 
      array (
        'model' => 'Cartalyst\\Sentinel\\Reminders\\EloquentReminder',
        'expires' => 14400,
        'lottery' => 
        array (
          0 => 2,
          1 => 100,
        ),
      ),
      'throttling' => 
      array (
        'model' => 'Cartalyst\\Sentinel\\Throttling\\EloquentThrottle',
        'global' => 
        array (
          'interval' => 900,
          'thresholds' => 
          array (
            10 => 1,
            20 => 2,
            30 => 4,
            40 => 8,
            50 => 16,
            60 => 12,
          ),
        ),
        'ip' => 
        array (
          'interval' => 900,
          'thresholds' => 5,
        ),
        'user' => 
        array (
          'interval' => 900,
          'thresholds' => 5,
        ),
      ),
    ),
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'database' => 'fleetcart_new',
        'prefix' => '',
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'fleetcart_new',
        'username' => 'root',
        'password' => '',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'strict' => true,
        'engine' => 'InnoDB',
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'fleetcart_new',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'fleetcart_new',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'predis',
      'default' => 
      array (
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => 0,
      ),
    ),
  ),
  'debugbar' => 
  array (
    'enabled' => false,
    'except' => 
    array (
    ),
    'storage' => 
    array (
      'enabled' => true,
      'driver' => 'file',
      'path' => '/media/ahmed/f/Laravel-Projects/FleetCart/storage/debugbar',
      'connection' => NULL,
      'provider' => '',
    ),
    'include_vendors' => true,
    'capture_ajax' => true,
    'add_ajax_timing' => false,
    'error_handler' => false,
    'clockwork' => false,
    'collectors' => 
    array (
      'phpinfo' => true,
      'messages' => true,
      'time' => true,
      'memory' => true,
      'exceptions' => true,
      'log' => true,
      'db' => true,
      'views' => false,
      'route' => true,
      'auth' => false,
      'gate' => false,
      'session' => true,
      'symfony_request' => true,
      'mail' => true,
      'laravel' => true,
      'events' => false,
      'default_request' => false,
      'logs' => true,
      'files' => false,
      'config' => false,
      'cache' => true,
    ),
    'options' => 
    array (
      'auth' => 
      array (
        'show_name' => true,
      ),
      'db' => 
      array (
        'with_params' => true,
        'backtrace' => true,
        'timeline' => true,
        'explain' => 
        array (
          'enabled' => true,
          'types' => 
          array (
            0 => 'SELECT',
          ),
        ),
        'hints' => true,
      ),
      'mail' => 
      array (
        'full_log' => false,
      ),
      'views' => 
      array (
        'data' => false,
      ),
      'route' => 
      array (
        'label' => true,
      ),
      'logs' => 
      array (
        'file' => NULL,
      ),
      'cache' => 
      array (
        'values' => true,
      ),
    ),
    'inject' => true,
    'route_prefix' => '_debugbar',
    'route_domain' => NULL,
    'theme' => 'auto',
  ),
  'filesystems' => 
  array (
    'default' => 'public_storage',
    'cloud' => 's3',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => '/media/ahmed/f/Laravel-Projects/FleetCart/storage/app',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => '/media/ahmed/f/Laravel-Projects/FleetCart/storage/app/public',
        'url' => 'http://fleetcart.test/storage',
        'visibility' => 'public',
      ),
      'public_storage' => 
      array (
        'driver' => 'local',
        'root' => '/media/ahmed/f/Laravel-Projects/FleetCart/public/storage',
        'url' => 'http://fleetcart.test/storage',
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'bucket' => '',
        'url' => NULL,
      ),
    ),
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => 10,
    ),
    'argon' => 
    array (
      'memory' => 1024,
      'threads' => 2,
      'time' => 2,
    ),
  ),
  'ignition' => 
  array (
    'editor' => 'phpstorm',
    'theme' => 'light',
    'enable_share_button' => true,
    'register_commands' => false,
    'ignored_solution_providers' => 
    array (
    ),
    'enable_runnable_solutions' => NULL,
    'remote_sites_path' => '',
    'local_sites_path' => '',
    'housekeeping_endpoint_prefix' => '_ignition',
  ),
  'insights' => 
  array (
    'preset' => 'laravel',
    'ide' => 'vscode',
    'exclude' => 
    array (
    ),
    'add' => 
    array (
      'NunoMaduro\\PhpInsights\\Domain\\Metrics\\Architecture\\Classes' => 
      array (
        0 => 'NunoMaduro\\PhpInsights\\Domain\\Insights\\ForbiddenFinalClasses',
      ),
    ),
    'remove' => 
    array (
      0 => 'SlevomatCodingStandard\\Sniffs\\Namespaces\\AlphabeticallySortedUsesSniff',
      1 => 'SlevomatCodingStandard\\Sniffs\\TypeHints\\DeclareStrictTypesSniff',
      2 => 'SlevomatCodingStandard\\Sniffs\\TypeHints\\DisallowMixedTypeHintSniff',
      3 => 'NunoMaduro\\PhpInsights\\Domain\\Insights\\ForbiddenDefineFunctions',
      4 => 'NunoMaduro\\PhpInsights\\Domain\\Insights\\ForbiddenNormalClasses',
      5 => 'NunoMaduro\\PhpInsights\\Domain\\Insights\\ForbiddenTraits',
      6 => 'SlevomatCodingStandard\\Sniffs\\TypeHints\\ParameterTypeHintSniff',
      7 => 'SlevomatCodingStandard\\Sniffs\\TypeHints\\PropertyTypeHintSniff',
      8 => 'SlevomatCodingStandard\\Sniffs\\TypeHints\\ReturnTypeHintSniff',
      9 => 'SlevomatCodingStandard\\Sniffs\\Commenting\\UselessFunctionDocCommentSniff',
    ),
    'config' => 
    array (
      'NunoMaduro\\PhpInsights\\Domain\\Insights\\ForbiddenPrivateMethods' => 
      array (
        'title' => 'The usage of private methods is not idiomatic in Laravel.',
      ),
    ),
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'single',
        ),
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => '/media/ahmed/f/Laravel-Projects/FleetCart/storage/logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => '/media/ahmed/f/Laravel-Projects/FleetCart/storage/logs/laravel.log',
        'level' => 'debug',
        'days' => 7,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'critical',
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
    ),
  ),
  'mail' => 
  array (
    'default' => 'smtp',
    'mailers' => 
    array (
      'smtp' => 
      array (
        'transport' => 'smtp',
        'host' => NULL,
        'port' => NULL,
        'encryption' => NULL,
        'username' => NULL,
        'password' => NULL,
        'timeout' => NULL,
      ),
      'ses' => 
      array (
        'transport' => 'ses',
      ),
      'mailgun' => 
      array (
        'transport' => 'mailgun',
      ),
      'postmark' => 
      array (
        'transport' => 'postmark',
      ),
      'sendmail' => 
      array (
        'transport' => 'sendmail',
        'path' => '/usr/sbin/sendmail -bs',
      ),
      'log' => 
      array (
        'transport' => 'log',
        'channel' => NULL,
      ),
      'array' => 
      array (
        'transport' => 'array',
      ),
    ),
    'from' => 
    array (
      'address' => NULL,
      'name' => NULL,
    ),
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => '/media/ahmed/f/Laravel-Projects/FleetCart/resources/views/vendor/mail',
      ),
    ),
  ),
  'modules' => 
  array (
    'namespace' => 'Modules',
    'stubs' => 
    array (
      'enabled' => false,
      'path' => '/media/ahmed/f/Laravel-Projects/FleetCart/vendor/nwidart/laravel-modules/src/Commands/stubs',
      'files' => 
      array (
        'routes/web' => 'Routes/web.php',
        'routes/api' => 'Routes/api.php',
        'views/index' => 'Resources/views/index.blade.php',
        'views/master' => 'Resources/views/layouts/master.blade.php',
        'scaffold/config' => 'Config/config.php',
        'composer' => 'composer.json',
        'assets/js/app' => 'Resources/assets/js/app.js',
        'assets/sass/app' => 'Resources/assets/sass/app.scss',
        'webpack' => 'webpack.mix.js',
        'package' => 'package.json',
      ),
      'replacements' => 
      array (
        'routes/web' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
        ),
        'routes/api' => 
        array (
          0 => 'LOWER_NAME',
        ),
        'webpack' => 
        array (
          0 => 'LOWER_NAME',
        ),
        'json' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'MODULE_NAMESPACE',
          3 => 'PROVIDER_NAMESPACE',
        ),
        'views/index' => 
        array (
          0 => 'LOWER_NAME',
        ),
        'views/master' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
        ),
        'scaffold/config' => 
        array (
          0 => 'STUDLY_NAME',
        ),
        'composer' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'VENDOR',
          3 => 'AUTHOR_NAME',
          4 => 'AUTHOR_EMAIL',
          5 => 'MODULE_NAMESPACE',
          6 => 'PROVIDER_NAMESPACE',
        ),
      ),
      'gitkeep' => true,
    ),
    'paths' => 
    array (
      'modules' => '/media/ahmed/f/Laravel-Projects/FleetCart/Modules',
      'assets' => '/media/ahmed/f/Laravel-Projects/FleetCart/public/modules',
      'migration' => '/media/ahmed/f/Laravel-Projects/FleetCart/database/migrations',
      'generator' => 
      array (
        'config' => 
        array (
          'path' => 'Config',
          'generate' => true,
        ),
        'command' => 
        array (
          'path' => 'Console',
          'generate' => true,
        ),
        'migration' => 
        array (
          'path' => 'Database/Migrations',
          'generate' => true,
        ),
        'seeder' => 
        array (
          'path' => 'Database/Seeders',
          'generate' => true,
        ),
        'factory' => 
        array (
          'path' => 'Database/factories',
          'generate' => true,
        ),
        'model' => 
        array (
          'path' => 'Entities',
          'generate' => true,
        ),
        'routes' => 
        array (
          'path' => 'Routes',
          'generate' => true,
        ),
        'controller' => 
        array (
          'path' => 'Http/Controllers',
          'generate' => true,
        ),
        'filter' => 
        array (
          'path' => 'Http/Middleware',
          'generate' => true,
        ),
        'request' => 
        array (
          'path' => 'Http/Requests',
          'generate' => true,
        ),
        'provider' => 
        array (
          'path' => 'Providers',
          'generate' => true,
        ),
        'assets' => 
        array (
          'path' => 'Assets',
          'generate' => true,
        ),
        'lang' => 
        array (
          'path' => 'Resources/lang',
          'generate' => true,
        ),
        'views' => 
        array (
          'path' => 'Resources/views',
          'generate' => true,
        ),
        'test' => 
        array (
          'path' => 'Tests/Unit',
          'generate' => true,
        ),
        'test-feature' => 
        array (
          'path' => 'Tests/Feature',
          'generate' => true,
        ),
        'repository' => 
        array (
          'path' => 'Repositories',
          'generate' => false,
        ),
        'event' => 
        array (
          'path' => 'Events',
          'generate' => false,
        ),
        'listener' => 
        array (
          'path' => 'Listeners',
          'generate' => false,
        ),
        'policies' => 
        array (
          'path' => 'Policies',
          'generate' => false,
        ),
        'rules' => 
        array (
          'path' => 'Rules',
          'generate' => false,
        ),
        'jobs' => 
        array (
          'path' => 'Jobs',
          'generate' => false,
        ),
        'emails' => 
        array (
          'path' => 'Emails',
          'generate' => false,
        ),
        'notifications' => 
        array (
          'path' => 'Notifications',
          'generate' => false,
        ),
        'resource' => 
        array (
          'path' => 'Transformers',
          'generate' => false,
        ),
      ),
    ),
    'commands' => 
    array (
      0 => 'CommandMakeCommand',
      1 => 'ControllerMakeCommand',
      2 => 'DisableCommand',
      3 => 'DumpCommand',
      4 => 'EnableCommand',
      5 => 'EventMakeCommand',
      6 => 'JobMakeCommand',
      7 => 'ListenerMakeCommand',
      8 => 'MailMakeCommand',
      9 => 'MiddlewareMakeCommand',
      10 => 'NotificationMakeCommand',
      11 => 'ProviderMakeCommand',
      12 => 'RouteProviderMakeCommand',
      13 => 'InstallCommand',
      14 => 'ListCommand',
      15 => 'ModuleDeleteCommand',
      16 => 'ModuleMakeCommand',
      17 => 'FactoryMakeCommand',
      18 => 'PolicyMakeCommand',
      19 => 'RequestMakeCommand',
      20 => 'RuleMakeCommand',
      21 => 'MigrateCommand',
      22 => 'MigrateRefreshCommand',
      23 => 'MigrateResetCommand',
      24 => 'MigrateRollbackCommand',
      25 => 'MigrateStatusCommand',
      26 => 'MigrationMakeCommand',
      27 => 'ModelMakeCommand',
      28 => 'PublishCommand',
      29 => 'PublishConfigurationCommand',
      30 => 'PublishMigrationCommand',
      31 => 'PublishTranslationCommand',
      32 => 'SeedCommand',
      33 => 'SeedMakeCommand',
      34 => 'SetupCommand',
      35 => 'UnUseCommand',
      36 => 'UpdateCommand',
      37 => 'UseCommand',
      38 => 'ResourceMakeCommand',
      39 => 'TestMakeCommand',
      40 => 'LaravelModulesV6Migrator',
    ),
    'scan' => 
    array (
      'enabled' => false,
      'paths' => 
      array (
        0 => '/media/ahmed/f/Laravel-Projects/FleetCart/vendor/*/*',
      ),
    ),
    'composer' => 
    array (
      'vendor' => 'fleetcart',
      'author' => 
      array (
        'name' => 'Mehedi Hasan',
        'email' => 'mehedi5531@gmail.com',
      ),
    ),
    'composer-output' => false,
    'cache' => 
    array (
      'enabled' => false,
      'key' => 'fleetcart-modules',
      'lifetime' => 60,
    ),
    'register' => 
    array (
      'translations' => true,
      'files' => 'register',
    ),
    'activators' => 
    array (
      'file' => 
      array (
        'class' => 'Nwidart\\Modules\\Activators\\FileActivator',
        'statuses-file' => '/media/ahmed/f/Laravel-Projects/FleetCart/modules_statuses.json',
        'cache-key' => 'activator.installed',
        'cache-lifetime' => 604800,
      ),
    ),
    'activator' => 'file',
  ),
  'querydetector' => 
  array (
    'enabled' => false,
    'threshold' => 1,
    'except' => 
    array (
    ),
    'log_channel' => 'daily',
    'output' => 
    array (
      0 => 'BeyondCode\\QueryDetector\\Outputs\\Alert',
      1 => 'BeyondCode\\QueryDetector\\Outputs\\Log',
    ),
  ),
  'queue' => 
  array (
    'default' => 'sync',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => 'your-public-key',
        'secret' => 'your-secret-key',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'your-queue-name',
        'region' => 'us-east-1',
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
      ),
    ),
    'failed' => 
    array (
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'scout' => 
  array (
    'driver' => 'mysql',
    'algolia' => 
    array (
      'id' => NULL,
      'secret' => NULL,
    ),
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
    ),
    'ses' => 
    array (
      'key' => NULL,
      'secret' => NULL,
      'region' => 'us-east-1',
    ),
    'sparkpost' => 
    array (
      'secret' => NULL,
    ),
    'stripe' => 
    array (
      'model' => 'Modules\\User\\Entities\\User',
      'key' => NULL,
      'secret' => NULL,
    ),
    'facebook' => 
    array (
      'client_id' => NULL,
      'client_secret' => NULL,
      'redirect' => 'http://fleetcart.test/login/facebook/callback',
    ),
    'google' => 
    array (
      'client_id' => NULL,
      'client_secret' => NULL,
      'redirect' => 'http://fleetcart.test/login/google/callback',
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => 120,
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => '/media/ahmed/f/Laravel-Projects/FleetCart/storage/framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'fleetcart_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => NULL,
    'http_only' => true,
    'same_site' => NULL,
  ),
  'stats' => 
  array (
    'paths' => 
    array (
      0 => '/media/ahmed/f/Laravel-Projects/FleetCart/app',
      1 => '/media/ahmed/f/Laravel-Projects/FleetCart/Modules',
      2 => '/media/ahmed/f/Laravel-Projects/FleetCart/Themes',
    ),
    'exclude' => 
    array (
      0 => '/media/ahmed/f/Laravel-Projects/FleetCart/tests/bootstrap.php',
    ),
    'custom_component_classifier' => 
    array (
    ),
    'rejection_strategy' => 'Wnx\\LaravelStats\\RejectionStrategies\\RejectVendorClasses',
    'ignored_namespaces' => 
    array (
      0 => 'Wnx\\LaravelStats',
      1 => 'Illuminate',
      2 => 'Symfony',
    ),
  ),
  'stylist' => 
  array (
    'themes' => 
    array (
      'paths' => 
      array (
        0 => '/media/ahmed/f/Laravel-Projects/FleetCart/Themes',
      ),
    ),
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => '/media/ahmed/f/Laravel-Projects/FleetCart/resources/views',
    ),
    'compiled' => '/media/ahmed/f/Laravel-Projects/FleetCart/storage/framework/views',
  ),
  'translatable' => 
  array (
    'locales' => 
    array (
      0 => 'ar_EG',
      1 => 'en',
    ),
    'locale_separator' => '-',
    'locale' => NULL,
    'use_fallback' => true,
    'use_property_fallback' => true,
    'fallback_locale' => 'en',
    'translation_model_namespace' => NULL,
    'translation_suffix' => 'Translation',
    'locale_key' => 'locale',
    'to_array_always_loads_translations' => true,
    'rule_factory' => 
    array (
      'format' => 1,
      'prefix' => '%',
      'suffix' => '%',
    ),
  ),
  'debug-server' => 
  array (
    'host' => 'tcp://127.0.0.1:9912',
  ),
  'shopping_cart' => 
  array (
    'format_numbers' => false,
    'decimals' => 0,
    'dec_point' => '.',
    'thousands_sep' => ',',
    'storage' => NULL,
    'events' => NULL,
  ),
  'flare' => 
  array (
    'key' => NULL,
    'reporting' => 
    array (
      'anonymize_ips' => true,
      'collect_git_information' => false,
      'report_queries' => true,
      'maximum_number_of_collected_queries' => 200,
      'report_query_bindings' => true,
      'report_view_data' => true,
      'grouping_type' => NULL,
      'report_logs' => true,
      'maximum_number_of_collected_logs' => 200,
    ),
    'send_logs_as_events' => true,
  ),
  'excel' => 
  array (
    'exports' => 
    array (
      'chunk_size' => 1000,
      'pre_calculate_formulas' => false,
      'strict_null_comparison' => false,
      'csv' => 
      array (
        'delimiter' => ',',
        'enclosure' => '"',
        'line_ending' => '
',
        'use_bom' => false,
        'include_separator_line' => false,
        'excel_compatibility' => false,
      ),
      'properties' => 
      array (
        'creator' => '',
        'lastModifiedBy' => '',
        'title' => '',
        'description' => '',
        'subject' => '',
        'keywords' => '',
        'category' => '',
        'manager' => '',
        'company' => '',
      ),
    ),
    'imports' => 
    array (
      'read_only' => true,
      'ignore_empty' => false,
      'heading_row' => 
      array (
        'formatter' => 'slug',
      ),
      'csv' => 
      array (
        'delimiter' => ',',
        'enclosure' => '"',
        'escape_character' => '\\',
        'contiguous' => false,
        'input_encoding' => 'UTF-8',
      ),
      'properties' => 
      array (
        'creator' => '',
        'lastModifiedBy' => '',
        'title' => '',
        'description' => '',
        'subject' => '',
        'keywords' => '',
        'category' => '',
        'manager' => '',
        'company' => '',
      ),
    ),
    'extension_detector' => 
    array (
      'xlsx' => 'Xlsx',
      'xlsm' => 'Xlsx',
      'xltx' => 'Xlsx',
      'xltm' => 'Xlsx',
      'xls' => 'Xls',
      'xlt' => 'Xls',
      'ods' => 'Ods',
      'ots' => 'Ods',
      'slk' => 'Slk',
      'xml' => 'Xml',
      'gnumeric' => 'Gnumeric',
      'htm' => 'Html',
      'html' => 'Html',
      'csv' => 'Csv',
      'tsv' => 'Csv',
      'pdf' => 'Dompdf',
    ),
    'value_binder' => 
    array (
      'default' => 'Maatwebsite\\Excel\\DefaultValueBinder',
    ),
    'cache' => 
    array (
      'driver' => 'memory',
      'batch' => 
      array (
        'memory_limit' => 60000,
      ),
      'illuminate' => 
      array (
        'store' => NULL,
      ),
    ),
    'transactions' => 
    array (
      'handler' => 'db',
    ),
    'temporary_files' => 
    array (
      'local_path' => '/media/ahmed/f/Laravel-Projects/FleetCart/storage/framework/laravel-excel',
      'remote_disk' => NULL,
      'remote_prefix' => NULL,
      'force_resync_remote' => NULL,
    ),
  ),
  'laravellocalization' => 
  array (
    'supportedLocales' => 
    array (
      'ar_EG' => 
      array (
        'name' => 'Arabic (Egypt)',
      ),
      'en' => 
      array (
        'name' => 'English',
      ),
    ),
    'useAcceptLanguageHeader' => true,
    'hideDefaultLocaleInURL' => false,
    'localesOrder' => 
    array (
    ),
    'localesMapping' => 
    array (
    ),
    'utf8suffix' => '.UTF-8',
    'urlsIgnored' => 
    array (
      0 => '/skipped',
    ),
  ),
  'datatables' => 
  array (
    'search' => 
    array (
      'smart' => true,
      'multi_term' => true,
      'case_insensitive' => true,
      'use_wildcards' => false,
      'starts_with' => false,
    ),
    'index_column' => 'DT_RowIndex',
    'engines' => 
    array (
      'eloquent' => 'Yajra\\DataTables\\EloquentDataTable',
      'query' => 'Yajra\\DataTables\\QueryDataTable',
      'collection' => 'Yajra\\DataTables\\CollectionDataTable',
      'resource' => 'Yajra\\DataTables\\ApiResourceDataTable',
    ),
    'builders' => 
    array (
    ),
    'nulls_last_sql' => ':column :direction NULLS LAST',
    'error' => NULL,
    'columns' => 
    array (
      'excess' => 
      array (
        0 => 'rn',
        1 => 'row_num',
      ),
      'escape' => '*',
      'raw' => 
      array (
        0 => 'action',
      ),
      'blacklist' => 
      array (
        0 => 'password',
        1 => 'remember_token',
      ),
      'whitelist' => '*',
    ),
    'json' => 
    array (
      'header' => 
      array (
      ),
      'options' => 0,
    ),
  ),
  'trustedproxy' => 
  array (
    'proxies' => NULL,
    'headers' => 94,
  ),
  'bone' => 
  array (
    'captcha' => 
    array (
      'middleware' => 
      array (
        0 => 'web',
      ),
      'routes' => 
      array (
        'image' => 'captcha/image',
        'image_tag' => 'captcha/image_tag',
      ),
      'blade' => 'captcha',
      'validator' => 'captcha',
      'generator' => 'Igoshev\\Captcha\\Captcha\\Generator\\GeneratorWaves',
      'storage' => 'Igoshev\\Captcha\\Captcha\\Storage\\SessionStorage',
      'code' => 'Igoshev\\Captcha\\Captcha\\Code\\SimpleCode',
      'font' => '/media/ahmed/f/Laravel-Projects/FleetCart/vendor/mehedi/laravel-captcha/src/resources/fonts/IndiraK.ttf',
      'fontSize' => 26,
      'letterSpacing' => 4,
      'length' => 
      array (
        0 => 4,
        1 => 5,
      ),
      'chars' => 'QSFHTRPAJKLMZXCVBNabdefhxktyzj23456789',
      'width' => 180,
      'height' => 50,
      'background' => 'f2f2f2',
      'colors' => '2980b9',
      'scratches' => 
      array (
        0 => 1,
        1 => 6,
      ),
      'inputId' => 'captcha',
    ),
  ),
  'newsletter' => 
  array (
    'driver' => 'api',
    'apiKey' => NULL,
    'defaultListName' => 'subscribers',
    'lists' => 
    array (
      'subscribers' => 
      array (
        'id' => NULL,
      ),
    ),
    'ssl' => true,
  ),
  'fleetcart' => 
  array (
    'modules' => 
    array (
      'admin' => 
      array (
        'assets' => 
        array (
          'all_assets' => 
          array (
            'admin.css' => 
            array (
              'module' => 'admin:css/admin.css',
            ),
            'admin.js' => 
            array (
              'module' => 'admin:js/admin.js',
            ),
            'admin.dashboard.css' => 
            array (
              'module' => 'admin:css/dashboard.css',
            ),
            'admin.dashboard.js' => 
            array (
              'module' => 'admin:js/dashboard.js',
            ),
            'admin.polyfill.js' => 
            array (
              'cdn' => 'https://cdn.polyfill.io/v2/polyfill.min.js',
            ),
          ),
          'required_assets' => 
          array (
            0 => 'admin.css',
            1 => 'admin.polyfill.js',
            2 => 'admin.js',
          ),
        ),
      ),
      'attribute' => 
      array (
        'assets' => 
        array (
          'all_assets' => 
          array (
            'admin.attribute.css' => 
            array (
              'module' => 'attribute:admin/css/attribute.css',
            ),
            'admin.attribute.js' => 
            array (
              'module' => 'attribute:admin/js/attribute.js',
            ),
          ),
          'required_assets' => 
          array (
          ),
        ),
        'permissions' => 
        array (
          'admin.attributes' => 
          array (
            'index' => 'attribute::permissions.attributes.index',
            'create' => 'attribute::permissions.attributes.create',
            'edit' => 'attribute::permissions.attributes.edit',
            'destroy' => 'attribute::permissions.attributes.destroy',
          ),
          'admin.attribute_sets' => 
          array (
            'index' => 'attribute::permissions.attribute_sets.index',
            'create' => 'attribute::permissions.attribute_sets.create',
            'edit' => 'attribute::permissions.attribute_sets.edit',
            'destroy' => 'attribute::permissions.attribute_sets.destroy',
          ),
        ),
      ),
      'brand' => 
      array (
        'assets' => 
        array (
          'all_assets' => 
          array (
            'admin.brand.js' => 
            array (
              'module' => 'brand:admin/js/brand.js',
            ),
          ),
          'required_assets' => 
          array (
          ),
        ),
        'permissions' => 
        array (
          'admin.brands' => 
          array (
            'index' => 'brand::permissions.index',
            'create' => 'brand::permissions.create',
            'edit' => 'brand::permissions.edit',
            'destroy' => 'brand::permissions.destroy',
          ),
        ),
      ),
      'cart' => 
      array (
        'config' => 
        array (
          'format_numbers' => false,
          'decimals' => 0,
          'dec_point' => '.',
          'thousands_sep' => ',',
          'storage' => NULL,
          'events' => NULL,
        ),
      ),
      'category' => 
      array (
        'assets' => 
        array (
          'all_assets' => 
          array (
            'admin.category.css' => 
            array (
              'module' => 'category:admin/css/category.css',
            ),
            'admin.category.js' => 
            array (
              'module' => 'category:admin/js/category.js',
            ),
            'admin.jstree.js' => 
            array (
              'module' => 'category:admin/js/jstree.js',
            ),
          ),
          'required_assets' => 
          array (
          ),
        ),
        'permissions' => 
        array (
          'admin.categories' => 
          array (
            'index' => 'category::permissions.index',
            'create' => 'category::permissions.create',
            'edit' => 'category::permissions.edit',
            'destroy' => 'category::permissions.destroy',
          ),
        ),
      ),
      'compare' => 
      array (
        'config' => 
        array (
          'format_numbers' => false,
          'decimals' => 0,
          'dec_point' => '.',
          'thousands_sep' => ',',
          'storage' => NULL,
          'events' => NULL,
        ),
      ),
      'contact' => 
      array (
        'assets' => 
        array (
          'all-assets' => 
          array (
            'admin.contact.css' => 
            array (
              'module' => 'contact:admin/css/contact.css',
            ),
            'admin.contact.js' => 
            array (
              'module' => 'contact:admin/js/contact.js',
            ),
          ),
          'required-assets' => 
          array (
          ),
        ),
      ),
      'core' => 
      array (
        'config' => 
        array (
          'core_modules' => 
          array (
            0 => 'core',
            1 => 'support',
            2 => 'admin',
            3 => 'dashboard',
            4 => 'meta',
            5 => 'user',
            6 => 'workshop',
            7 => 'setting',
            8 => 'media',
            9 => 'meta',
            10 => 'page',
            11 => 'product',
            12 => 'translation',
          ),
        ),
      ),
      'coupon' => 
      array (
        'permissions' => 
        array (
          'admin.coupons' => 
          array (
            'index' => 'coupon::permissions.index',
            'create' => 'coupon::permissions.create',
            'edit' => 'coupon::permissions.edit',
            'destroy' => 'coupon::permissions.destroy',
          ),
        ),
      ),
      'currency' => 
      array (
        'config' => 
        array (
          'services' => 
          array (
            'array' => 
            array (
              'latest_rates' => 
              array (
              ),
            ),
            'fixer' => 
            array (
              'access_key' => NULL,
            ),
            'forge' => 
            array (
              'api_key' => NULL,
            ),
            'currency_data_feed' => 
            array (
              'api_key' => NULL,
            ),
          ),
        ),
        'assets' => 
        array (
          'all_assets' => 
          array (
            'admin.currency.js' => 
            array (
              'module' => 'currency:admin/js/currency.js',
            ),
          ),
          'required_assets' => 
          array (
          ),
        ),
        'permissions' => 
        array (
          'admin.currency_rates' => 
          array (
            'index' => 'currency::permissions.index',
            'edit' => 'currency::permissions.edit',
          ),
        ),
      ),
      'flashsale' => 
      array (
        'assets' => 
        array (
          'all_assets' => 
          array (
            'admin.flashsale.js' => 
            array (
              'module' => 'flashsale:admin/js/flashsale.js',
            ),
          ),
          'required_assets' => 
          array (
          ),
        ),
        'permissions' => 
        array (
          'admin.flash_sales' => 
          array (
            'index' => 'flashsale::permissions.index',
            'create' => 'flashsale::permissions.create',
            'edit' => 'flashsale::permissions.edit',
            'destroy' => 'flashsale::permissions.destroy',
          ),
        ),
      ),
      'import' => 
      array (
        'assets' => 
        array (
          'all_assets' => 
          array (
            'admin.import.js' => 
            array (
              'module' => 'import:admin/js/importer.js',
            ),
          ),
        ),
        'permissions' => 
        array (
          'admin.importer' => 
          array (
            'index' => 'import::permissions.index',
            'create' => 'import::permissions.create',
          ),
        ),
      ),
      'media' => 
      array (
        'assets' => 
        array (
          'all_assets' => 
          array (
            'admin.media.css' => 
            array (
              'module' => 'media:admin/css/media.css',
            ),
            'admin.media.js' => 
            array (
              'module' => 'media:admin/js/media.js',
            ),
          ),
          'required_assets' => 
          array (
          ),
        ),
        'permissions' => 
        array (
          'admin.media' => 
          array (
            'index' => 'media::permissions.index',
            'create' => 'media::permissions.create',
            'destroy' => 'media::permissions.destroy',
          ),
        ),
      ),
      'menu' => 
      array (
        'assets' => 
        array (
          'all_assets' => 
          array (
            'admin.menu.css' => 
            array (
              'module' => 'menu:admin/css/menu.css',
            ),
            'admin.menu.js' => 
            array (
              'module' => 'menu:admin/js/menu.js',
            ),
          ),
          'required_assets' => 
          array (
          ),
        ),
        'permissions' => 
        array (
          'admin.menus' => 
          array (
            'index' => 'menu::permissions.menus.index',
            'create' => 'menu::permissions.menus.create',
            'edit' => 'menu::permissions.menus.edit',
            'destroy' => 'menu::permissions.menus.destroy',
          ),
          'admin.menu_items' => 
          array (
            'index' => 'menu::permissions.menu_items.index',
            'create' => 'menu::permissions.menu_items.create',
            'edit' => 'menu::permissions.menu_items.edit',
            'destroy' => 'menu::permissions.menu_items.destroy',
          ),
        ),
      ),
      'option' => 
      array (
        'assets' => 
        array (
          'all_assets' => 
          array (
            'admin.option.css' => 
            array (
              'module' => 'option:admin/css/option.css',
            ),
            'admin.option.js' => 
            array (
              'module' => 'option:admin/js/option.js',
            ),
          ),
          'required_assets' => 
          array (
          ),
        ),
        'permissions' => 
        array (
          'admin.options' => 
          array (
            'index' => 'option::permissions.options.index',
            'create' => 'option::permissions.options.create',
            'edit' => 'option::permissions.options.edit',
            'destroy' => 'option::permissions.options.destroy',
          ),
        ),
      ),
      'order' => 
      array (
        'assets' => 
        array (
          'all_assets' => 
          array (
            'admin.order.css' => 
            array (
              'module' => 'order:admin/css/order.css',
            ),
            'admin.order.js' => 
            array (
              'module' => 'order:admin/js/order.js',
            ),
          ),
          'required_assets' => 
          array (
          ),
        ),
        'permissions' => 
        array (
          'admin.orders' => 
          array (
            'index' => 'order::permissions.index',
            'show' => 'order::permissions.show',
            'edit' => 'order::permissions.edit',
          ),
        ),
      ),
      'page' => 
      array (
        'permissions' => 
        array (
          'admin.pages' => 
          array (
            'index' => 'page::permissions.index',
            'create' => 'page::permissions.create',
            'edit' => 'page::permissions.edit',
            'destroy' => 'page::permissions.destroy',
          ),
        ),
      ),
      'product' => 
      array (
        'config' => 
        array (
          'recently_viewed' => 
          array (
            'format_numbers' => false,
            'decimals' => 0,
            'dec_point' => '.',
            'thousands_sep' => ',',
            'storage' => NULL,
            'events' => NULL,
          ),
        ),
        'assets' => 
        array (
          'all_assets' => 
          array (
            'admin.product.js' => 
            array (
              'module' => 'product:admin/js/product.js',
            ),
            'admin.product.css' => 
            array (
              'module' => 'product:admin/css/product.css',
            ),
          ),
          'required_assets' => 
          array (
          ),
        ),
        'permissions' => 
        array (
          'admin.products' => 
          array (
            'index' => 'product::permissions.index',
            'create' => 'product::permissions.create',
            'edit' => 'product::permissions.edit',
            'destroy' => 'product::permissions.destroy',
          ),
        ),
      ),
      'report' => 
      array (
        'assets' => 
        array (
          'all_assets' => 
          array (
            'admin.report.css' => 
            array (
              'module' => 'report:admin/css/report.css',
            ),
            'admin.report.js' => 
            array (
              'module' => 'report:admin/js/report.js',
            ),
          ),
          'required_assets' => 
          array (
          ),
        ),
        'permissions' => 
        array (
          'admin.reports' => 
          array (
            'index' => 'report::permissions.index',
          ),
        ),
      ),
      'review' => 
      array (
        'permissions' => 
        array (
          'admin.reviews' => 
          array (
            'index' => 'review::permissions.index',
            'edit' => 'review::permissions.edit',
            'destroy' => 'review::permissions.destroy',
          ),
        ),
      ),
      'setting' => 
      array (
        'assets' => 
        array (
          'all_assets' => 
          array (
            'admin.setting.js' => 
            array (
              'module' => 'setting:admin/js/setting.js',
            ),
          ),
          'required_assets' => 
          array (
          ),
        ),
        'permissions' => 
        array (
          'admin.settings' => 
          array (
            'edit' => 'setting::permissions.edit',
          ),
        ),
      ),
      'slider' => 
      array (
        'assets' => 
        array (
          'all_assets' => 
          array (
            'admin.slider.css' => 
            array (
              'module' => 'slider:admin/css/slider.css',
            ),
            'admin.slider.js' => 
            array (
              'module' => 'slider:admin/js/slider.js',
            ),
          ),
          'required_assets' => 
          array (
          ),
        ),
        'permissions' => 
        array (
          'admin.sliders' => 
          array (
            'index' => 'slider::permissions.index',
            'create' => 'slider::permissions.create',
            'edit' => 'slider::permissions.edit',
            'destroy' => 'slider::permissions.destroy',
          ),
        ),
      ),
      'tag' => 
      array (
        'assets' => 
        array (
          'all_assets' => 
          array (
            'admin.tag.css' => 
            array (
              'module' => 'tag:admin/css/tag.css',
            ),
            'admin.tag.js' => 
            array (
              'module' => 'tag:admin/js/tag.js',
            ),
          ),
          'required_assets' => 
          array (
          ),
        ),
        'permissions' => 
        array (
          'admin.tags' => 
          array (
            'index' => 'tag::permissions.index',
            'create' => 'tag::permissions.create',
            'edit' => 'tag::permissions.edit',
            'destroy' => 'tag::permissions.destroy',
          ),
        ),
      ),
      'tax' => 
      array (
        'assets' => 
        array (
          'all_assets' => 
          array (
            'admin.tax.css' => 
            array (
              'module' => 'tax:admin/css/tax.css',
            ),
            'admin.tax.js' => 
            array (
              'module' => 'tax:admin/js/tax.js',
            ),
          ),
          'required_assets' => 
          array (
          ),
        ),
        'permissions' => 
        array (
          'admin.taxes' => 
          array (
            'index' => 'tax::permissions.taxes.index',
            'create' => 'tax::permissions.taxes.create',
            'edit' => 'tax::permissions.taxes.edit',
            'destroy' => 'tax::permissions.taxes.destroy',
          ),
        ),
      ),
      'transaction' => 
      array (
        'permissions' => 
        array (
          'admin.transactions' => 
          array (
            'index' => 'transaction::permissions.index',
          ),
        ),
      ),
      'translation' => 
      array (
        'assets' => 
        array (
          'all_assets' => 
          array (
            'admin.translation.css' => 
            array (
              'module' => 'translation:admin/css/translation.css',
            ),
            'admin.translation.js' => 
            array (
              'module' => 'translation:admin/js/translation.js',
            ),
          ),
          'required_assets' => 
          array (
          ),
        ),
        'permissions' => 
        array (
          'admin.translations' => 
          array (
            'index' => 'translation::permissions.index',
            'edit' => 'translation::permissions.edit',
          ),
        ),
      ),
      'user' => 
      array (
        'assets' => 
        array (
          'all_assets' => 
          array (
            'admin.user.css' => 
            array (
              'module' => 'user:admin/css/user.css',
            ),
            'admin.user.js' => 
            array (
              'module' => 'user:admin/js/user.js',
            ),
            'admin.login.css' => 
            array (
              'module' => 'user:admin/css/login.css',
            ),
            'admin.login.js' => 
            array (
              'module' => 'user:admin/js/login.js',
            ),
          ),
          'required_assets' => 
          array (
          ),
        ),
        'permissions' => 
        array (
          'admin.users' => 
          array (
            'index' => 'user::permissions.users.index',
            'create' => 'user::permissions.users.create',
            'edit' => 'user::permissions.users.edit',
            'destroy' => 'user::permissions.users.destroy',
          ),
          'admin.roles' => 
          array (
            'index' => 'user::permissions.roles.index',
            'create' => 'user::permissions.roles.create',
            'edit' => 'user::permissions.roles.edit',
            'destroy' => 'user::permissions.roles.destroy',
          ),
        ),
      ),
    ),
    'themes' => 
    array (
      'storefront' => 
      array (
        'assets' => 
        array (
          'all_assets' => 
          array (
            'admin.storefront.css' => 
            array (
              'theme' => 'admin/css/storefront.css',
            ),
            'admin.storefront.js' => 
            array (
              'theme' => 'admin/js/storefront.js',
            ),
          ),
          'required_assets' => 
          array (
          ),
        ),
        'permissions' => 
        array (
          'admin.storefront' => 
          array (
            'edit' => 'storefront::permissions.storefront.edit',
          ),
        ),
      ),
    ),
  ),
  'sidebar' => 
  array (
    'cache' => 
    array (
      'method' => NULL,
      'duration' => 1440,
    ),
  ),
  'ziggy' => 
  array (
    'blacklist' => 
    array (
      0 => 'admin.*',
    ),
  ),
  'dotenv-editor' => 
  array (
    'autoBackup' => true,
    'backupPath' => '/media/ahmed/f/Laravel-Projects/FleetCart/storage/dotenv-editor/backups/',
    'alwaysCreateBackupFolder' => false,
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'alias' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
  ),
);
