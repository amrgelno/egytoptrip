<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// 1. Update maintenance path (removed /..)
if (file_exists($maintenance = __DIR__.'/storage/framework/maintenance.php')) {
    require $maintenance;
}

// 2. Update Composer autoloader path (removed /..)
require __DIR__.'/vendor/autoload.php';

// 3. Update Bootstrap path (removed /..)
$app = require_once __DIR__.'/bootstrap/app.php';

// 4. Bind the public path to the root directory
$app->usePublicPath(__DIR__);

$app->handleRequest(Request::capture());
