<?php
$manifest = [
    'acceptable_sugar_versions' => ['exact_matches' => ['6.5.*']],
    'acceptable_sugar_flavors' => ['CE'],
    'readme' => '',
    'key' => 'custom',
    'author' => 'SaraMedhat',
    'description' => 'Add_on description here',
    'is_uninstallable' => true,
    'name' => 'Add_On Template',
    'published_date' => '2025-07-08',
    'type' => 'module',
    'version' => '1.0',
];

$installdefs = [
    'id' => 'add_on',
    'copy' => [
        [
            'from' => '<basepath>/custom/add_on.php',
            'to' => 'custom/add_on.php'
        ],
        [
            'from' => '<basepath>/custom/Extension/application/Ext/EntryPointRegistry/add_on.php',
            'to' => 'custom/Extension/application/Ext/EntryPointRegistry/add_on.php'
        ]
    ]
];
