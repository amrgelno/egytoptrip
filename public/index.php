<?php

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? '');

// Block sensitive files/directories
if (preg_match('#^/(\.|vendor|storage|bootstrap|config|database|app|routes|tests)#', $uri)
    || preg_match('#\.(env|lock|json|md|xml|yml|yaml)$#', $uri)) {
    http_response_code(404);
    exit;
}

// Serve real static files from public/ (css, js, images)
$file = __DIR__ . '/public' . $uri;
if ($uri !== '/' && is_file($file)) {
    $mime = [
        'css' => 'text/css', 'js' => 'application/javascript',
        'svg' => 'image/svg+xml', 'png' => 'image/png',
        'jpg' => 'image/jpeg', 'jpeg' => 'image/jpeg',
        'gif' => 'image/gif', 'webp' => 'image/webp',
        'ico' => 'image/x-icon', 'woff2' => 'font/woff2',
        'woff' => 'font/woff', 'json' => 'application/json',
    ];
    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    if ($ext !== 'php') {
        header('Content-Type: ' . ($mime[$ext] ?? mime_content_type($file)));
        readfile($file);
        exit;
    }
}

// Everything else goes to Laravel
$_SERVER['SCRIPT_FILENAME'] = __DIR__ . '/public/index.php';
$_SERVER['SCRIPT_NAME'] = '/index.php';
chdir(__DIR__ . '/public');
require __DIR__ . '/public/index.php';
