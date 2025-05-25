<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'resend' => [
        'key' => env('RESEND_KEY'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

    'workos' => [
        'client_id' => env('WORKOS_CLIENT_ID'),
        'secret' => env('WORKOS_API_KEY'),
        'redirect_url' => env('WORKOS_REDIRECT_URL'),
    ],

    'serpapi' => [
        'key' => env('SERPAPI_API_KEY'),
    ],

    'trello' => [
        'key' => env('TRELLO_API_KEY'),
        'token' => env('TRELLO_API_TOKEN'),
        'board_id' => env('TRELLO_BOARD_ID'),
    ],

    'hevy' => [
        'key' => env('HEVY_API_KEY')
    ],

    'poe' => [
        'token' => env('POE_API_TOKEN'),
        'token_encoded' => env('POE_API_TOKEN_ENCODED'),
    ]

];
