<?php

use Alphaws\LaravelTailwindComponents\Components;

return [
    'prefix' => '',
    'components' => [
        'form-input' => [
            'class' => Components\Input::class,
            'view' => 'tailwind-components::input',
        ],
        'form-select' => [
            'class' => Components\Select::class,
            'view' => 'tailwind-components::select',
        ],
        'form-button' => [
            'class' => '',
            'view' => '',
        ]
    ]
];
