<?php

return [
    '__name' => 'post-plagiarism',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/post-plagiarism.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/post-plagiarism' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'post' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [],
        'files' => []
    ],
    'libFormatter' => [
        'formats' => [
            'post' => [
                'plagiarism' => [
                    'type' => 'text'
                ]
            ]
        ]
    ]
];
