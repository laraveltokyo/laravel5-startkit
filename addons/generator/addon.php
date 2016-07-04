<?php

namespace App\Generator;

return [
    'version' => 5,
    'namespace' => __NAMESPACE__,
    'directories' => [
        'classes',
    ],
    'paths' => [
        'config' => 'config',
    ],
    'providers' => [
        Providers\AddonServiceProvider::class,
    ],
];
