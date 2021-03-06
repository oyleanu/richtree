<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'App\\Console\\Kernel' => $baseDir . '/app/Console/Kernel.php',
    'App\\Exceptions\\Handler' => $baseDir . '/app/Exceptions/Handler.php',
    'App\\Http\\Controllers\\Auth\\ForgotPasswordController' => $baseDir . '/app/Http/Controllers/Auth/ForgotPasswordController.php',
    'App\\Http\\Controllers\\Auth\\LoginController' => $baseDir . '/app/Http/Controllers/Auth/LoginController.php',
    'App\\Http\\Controllers\\Auth\\RegisterController' => $baseDir . '/app/Http/Controllers/Auth/RegisterController.php',
    'App\\Http\\Controllers\\Auth\\ResetPasswordController' => $baseDir . '/app/Http/Controllers/Auth/ResetPasswordController.php',
    'App\\Http\\Controllers\\Controller' => $baseDir . '/app/Http/Controllers/Controller.php',
    'App\\Http\\Controllers\\HomeController' => $baseDir . '/app/Http/Controllers/HomeController.php',
    'App\\Http\\Kernel' => $baseDir . '/app/Http/Kernel.php',
    'App\\Http\\Middleware\\EncryptCookies' => $baseDir . '/app/Http/Middleware/EncryptCookies.php',
    'App\\Http\\Middleware\\RedirectIfAuthenticated' => $baseDir . '/app/Http/Middleware/RedirectIfAuthenticated.php',
    'App\\Http\\Middleware\\TrimStrings' => $baseDir . '/app/Http/Middleware/TrimStrings.php',
    'App\\Http\\Middleware\\VerifyCsrfToken' => $baseDir . '/app/Http/Middleware/VerifyCsrfToken.php',
    'App\\Models\\Admin' => $baseDir . '/app/Models/Admin.php',
    'App\\Models\\Permission' => $baseDir . '/app/Models/Permission.php',
    'App\\Models\\Role' => $baseDir . '/app/Models/Role.php',
    'App\\Models\\User' => $baseDir . '/app/Models/User.php',
    'App\\Providers\\AppServiceProvider' => $baseDir . '/app/Providers/AppServiceProvider.php',
    'App\\Providers\\AuthServiceProvider' => $baseDir . '/app/Providers/AuthServiceProvider.php',
    'App\\Providers\\BroadcastServiceProvider' => $baseDir . '/app/Providers/BroadcastServiceProvider.php',
    'App\\Providers\\EventServiceProvider' => $baseDir . '/app/Providers/EventServiceProvider.php',
    'App\\Providers\\RouteServiceProvider' => $baseDir . '/app/Providers/RouteServiceProvider.php',
    'CreateAdminsTable' => $vendorDir . '/database/migrations/2014_10_12_000000_create_admins_table.php',
    'CreatePasswordResetsTable' => $vendorDir . '/database/migrations/2014_10_12_100000_create_password_resets_table.php',
    'CreateUsersTable' => $vendorDir . '/database/migrations/2014_10_12_000000_create_users_table.php',
    'DatabaseSeeder' => $vendorDir . '/database/seeds/DatabaseSeeder.php',
    'LaratrustSeeder' => $vendorDir . '/database/seeds/LaratrustSeeder.php',
    'LaratrustSetupTables' => $vendorDir . '/database/migrations/2017_06_30_160238_laratrust_setup_tables.php',
    'Tests\\CreatesApplication' => $vendorDir . '/tests/CreatesApplication.php',
    'Tests\\Feature\\ExampleTest' => $vendorDir . '/tests/Feature/ExampleTest.php',
    'Tests\\TestCase' => $vendorDir . '/tests/TestCase.php',
    'Tests\\Unit\\ExampleTest' => $vendorDir . '/tests/Unit/ExampleTest.php',
);
