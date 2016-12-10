<?php

namespace Whois;

use Whois\Controller\Plugin\Factory\WhoisPluginFactory;
use Whois\Controller\Plugin\WhoisPlugin;
use Whois\Service\Factory\WhoisServiceFactory;
use Whois\Service\WhoisService;

return [
    'service_manager' => [
        'aliases' => [
            'whois' => WhoisService::class,
        ],
        'factories' => [
            WhoisService::class => WhoisServiceFactory::class,
        ],
    ],
    'controller_plugins' => [
        'aliases' => [
            'whois' => WhoisPlugin::class,
        ],
        'factories' => [
            WhoisPlugin::class => WhoisPluginFactory::class,
        ],
    ],
];