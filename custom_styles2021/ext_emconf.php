<?php

/**
 * Extension Manager/Repository config file for ext "custom_styles2021".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Custom-Styles 2021',
    'description' => 'Overrides für Bootstrappackage',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '11.0.0-11.0.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Roemerag\\CustomStyles2021\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Christoph Römer',
    'author_email' => 'christoph@roemer.ag',
    'author_company' => 'roemer.ag',
    'version' => '1.0.0',
];
