<?php

declare(strict_types=1);

return [
  'doctrine' => [
    'connection' => [
      'orm_default' => [
        'params' => [
          'host' => 'localhost',
          'port' => '3306',
          'user' => 'root',
          'password' => 'batatinha123',
          'dbname' => 'my_application',
        ]
      ],
    ],
    'driver' => [
      // defines an annotation driver with two paths, and names it `my_annotation_driver`
      'my_annotation_driver' => [
        'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
        'cache' => 'array',
        'paths' => [
          'path/to/my/entities',
          'another/path',
        ],
      ],

      // default metadata driver, aggregates all other drivers into a single one.
      // Override `orm_default` only if you know what you're doing
      'orm_default' => [
        'drivers' => [
          // register `my_annotation_driver` for any entity under namespace `My\Namespace`
          'My\Namespace' => 'my_annotation_driver',
        ],
      ],
    ],
  ],
  // Retrieve the list of modules for this application.
  'modules' => include __DIR__ . '/modules.config.php',
  // This should be an array of paths in which modules reside.
  // If a string key is provided, the listener will consider that a module
  // namespace, the value of that key the specific path to that module's
  // Module class.
  'module_listener_options' => [
    'module_paths' => [
      './module',
      './vendor',
    ],
    // Using __DIR__ to ensure cross-platform compatibility. Some platforms --
    // e.g., IBM i -- have problems with globs that are not qualified.
    'config_glob_paths'        => [realpath(__DIR__) . '/autoload/{,*.}{global,local}.php'],
    'config_cache_key'         => 'application.config.cache',
    'config_cache_enabled'     => true,
    'module_map_cache_key'     => 'application.module.cache',
    'module_map_cache_enabled' => true,
    'cache_dir'                => 'data/cache/',
  ],
];
