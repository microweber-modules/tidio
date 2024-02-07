<?php
$config = array();
$config['name'] = "Tidio";
$config['author'] = "Microweber";
$config['no_cache'] = false;
$config['ui'] = false;
$config['ui_admin'] = true;
$config['categories'] = "miscellaneous";
$config['position'] = 39;
$config['version'] = 1.0;

$config['settings'] = [];

$config['settings']['routes']['admin'] = 'admin.tidio.index';

$config['settings']['autoload_namespace'] = [
    [
        'path' => __DIR__ . '/src/',
        'namespace' => 'MicroweberPackages\\Modules\\Tidio'
    ],
];

$config['settings']['service_provider'] = [
    \MicroweberPackages\Modules\Tidio\Providers\TidioServiceProvider::class
];
