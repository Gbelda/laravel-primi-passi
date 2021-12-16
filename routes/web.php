<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        'indexes' => [
            'Home',
            'About',
            'Characters',
            'Mechas'
        ]
    ];

    return view('home', $data);
});

Route::get('/home', function () {
    $data = [
        'indexes' => [
            'Home',
            'About',
            'Characters',
            'Mechas'
        ]
    ];

    return view('home', $data);
})->name('home');

Route::get('/about', function () {
    $data = [
        'indexes' => [
            'Home',
            'About',
            'Characters',
            'Mechas'
        ]
    ];

    return view('about', $data,  );
})->name('about');

Route::get('/characters', function () {
    $data = [
        'indexes' => [
            'Home',
            'About',
            'Characters',
            'Mechas'
        ],

        'characters' => [
            [
                "name" => 'Banagher Links',
                "image" => 'https://s4.anilist.co/file/anilistcdn/character/large/b9465-eqQpsNlAteOU.png',
                "description" => 'A student at Anaheim Industry Technical School in the colony "Industrial 7". pilot of the RX-0 Unicorn Gundam. Son of Cardeas with his second wife.',
            ],
            [
                "name" => 'Audrey Burne',
                "image" => 'https://s4.anilist.co/file/anilistcdn/character/large/b9497-BKfFhooiVi44.jpg',
                "description" => 'A girl from a noble family, whose life changes after she meets Banagher.',
            ],
            [
                "name" => 'Full Frontal',
                "image" => 'https://s4.anilist.co/file/anilistcdn/character/large/9500.jpg',
                "description" => 'The mysterious leader of the Neo Zeon remnant forces who is described as the "2nd coming of Char".',
            ],
        ]
    ];

    return view('characters', $data,  );
})->name('characters');

Route::get('/mechas', function () {
    $data = [
        'indexes' => [
            'Home',
            'About',
            'Characters',
            'Mechas'
        ],

        'mechas'=>[
            [
                'name' => 'RX-0 Unicorn Gundam',
                'image' => 'https://static.wikia.nocookie.net/gundam/images/0/03/Rxuc-ova-ntd.jpg'
            ],
            [
                'name' => 'RX-0 Unicorn Banshee',
                'image' => 'https://static.wikia.nocookie.net/gundam/images/b/b9/Banshee_Destroy_Mode_-_Front_View.jpg'
            ],
            [
                'name' => 'MSN-06S SINANJU',
                'image' => 'https://static.wikia.nocookie.net/gundam/images/b/bc/Msn-06s.jpg'
            ],
            [
                'name' => 'YAMS-132 Rozen Zulu',
                'image' => 'https://static.wikia.nocookie.net/gundam/images/8/84/Rozen_Zulu_-_Front_View.jpg'
            ],
            [
                'name' => 'RGZ-95 ReZEL',
                'image' => 'https://static.wikia.nocookie.net/gundam/images/3/3b/Rgz-95.jpg'
            ],
            [
                'name' => 'RGM-86R GM III',
                'image' => 'https://static.wikia.nocookie.net/gundam/images/8/82/Rgm-86r-ground.jpg'
            ]

        ]
    ];



    return view('mechas', $data,  );
})->name('mechas');