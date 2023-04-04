<?php

return [
    'name' => 'Market',
    'navigation'=>[
        'name' => 'Market',
        'enabled' => true,
    ],
    'setting'=>[
        'label'=>'Market',
        'icon'=>'heroicon-o-shopping-bag'
    ],
    'setting-navigation'=>[
        'name' => 'Settings',
        'enabled' => true,
    ],
    'mobile'=>[
        'sidebar'=>[
            'home'=>[
                'name'=>'Home',
                'url'=>'/',
                'icon'=>'shop',
            ],
            'order'=>[
                'name'=>'Orders',
                'url'=>'/orders',
                'icon'=>'receipt',
            ],
            'favorite'=>[
                'name'=>'Favorites',
                'url'=>'/favorites',
                'icon'=>'heart',
            ],
            'address'=>[
                'name'=>'Addresses',
                'url'=>'/addresses',
                'icon'=>'pin-map',
            ]
        ]
    ]
];
