<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'user/config/site.yaml',
    'modified' => 1431157750,
    'data' => [
        'title' => 'Mediator',
        'description' => 'A Grav theme - Medium inspired',
        'taxonomies' => [
            0 => 'tag',
            1 => 'featured'
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
        ],
        'logo' => '/user/images/logo.jpg',
        'date_long' => 'd F Y',
        'date_short' => 'd M Y',
        'author' => [
            'name' => 'Bill Bloggs',
            'email' => 'a-mail@mail.mail',
            'image' => '/user/images/avatar.jpg',
            'bio' => 'I\'m a blogger and a Grav-lover'
        ],
        'social' => [
            0 => [
                'icon' => 'twitter',
                'url' => 'https://twitter.com/getgrav',
                'desc' => 'Follow me on twitter',
                'share_url' => 'http://twitter.com/share',
                'share_title' => '?text=',
                'share_link' => '&amp;url='
            ],
            1 => [
                'icon' => 'facebook',
                'url' => 'https://facebook.com/???',
                'desc' => 'Connect with me facebook',
                'share_url' => '//www.facebook.com/sharer.php',
                'share_title' => '?t=',
                'share_link' => '&amp;u='
            ],
            2 => [
                'icon' => 'github',
                'url' => 'https://github.com/getgrav',
                'desc' => 'Fork me on github',
                'share_url' => NULL,
                'share_title' => NULL,
                'share_link' => NULL
            ],
            3 => [
                'icon' => 'google-plus',
                'url' => 'https://google.com/???',
                'desc' => 'Add me on google+',
                'share_url' => NULL,
                'share_title' => NULL,
                'share_link' => NULL
            ]
        ]
    ]
];
