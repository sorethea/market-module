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
                'url'=>'/market',
                'icon'=>'shop',
            ],
            'order'=>[
                'name'=>'Orders',
                'url'=>'/market/orders',
                'icon'=>'receipt',
            ],
            'favorite'=>[
                'name'=>'Favorites',
                'url'=>'/market/favorites',
                'icon'=>'heart',
            ],
            'address'=>[
                'name'=>'Addresses',
                'url'=>'/market/addresses',
                'icon'=>'pin-map',
            ],
            'setting'=>[
                'name'=>'Settings',
                'url'=>'/market/settings',
                'icon'=>'gear',
            ]
        ]
    ]
];
