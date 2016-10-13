<?php

return [
    'error' => [
        'debug' => env('API_DEBUG', false),

        'format' => [
            'status' => 'error',
            'message' => ':message',
            'data' => [
                'code' => ':code',
                'debug' => ':debug',
            ]
        ]
    ]
];
