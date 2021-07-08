<?php

namespace User;

use Laminas\ServiceManager\Factory\InvokableFactory;
use Laminas\Router\Http\Segment;

return [
  'router' => [
    'routes' => [
      'user' => [
        'type' => Segment::class,
        'options' => [
          'route' => '/user[/:action[/:id]]',
          'constraints' => [
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'id' => '[0-9]+',
          ],
          'defaults' => [
            'controller' => Controller\UserController::class,
            'action' => 'index',
          ],
        ],
      ],
    ],
  ],
  'controllers' => [
    'factories' => [
      Controller\UserController::class => InvokableFactory::class,
    ],
  ],
];
