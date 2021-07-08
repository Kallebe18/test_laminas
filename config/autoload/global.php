<?php

declare(strict_types=1);

return [
  'api-tools-content-negotiation' => [
    'selectors' => [],
  ],
  'doctrine' => [
    'migrations_configuration' => [
      'orm_default' => [
        'directory' => 'data/Migrations',
        'name' => 'Doctrine Database Migrations',
        'namespace' => 'Migrations',
        'table' => 'migrations',
      ],
    ],
  ],
];
