<?php
return [
    'male' => 1,
    'female' => 0,
    'user' => 0,
    'admin' => 1,
    'post' =>1,
    'tour' =>0,
    'defaultPath' => 'images/',
    'defaultMedia' => 'media/',
    'stripe' => 1,
    'direct_payment' => 0,
    'media' => [
        'type' => [
            'image' => 0,
            'video' => 1,
            'file' => 2,
        ],
        'status' => [
            'hide' => 0,
            'show' => 1
        ]
    ],
    'post' => [
        'status' => [
            'hide' => 0,
            'show' => 1
        ],
    ],
    'project' => [
        'status' => [
            'request' => 0,
            'accept' => 1,
            'approved' => 2,
            'denied' => 3,
            'doing' => 4,
        ]
    ]
];