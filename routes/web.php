<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {


    
    $navLinks = [
        [
            'name' => 'characthers',
            'current' => false
        ],
        [
            'name' => 'comics',
            'current' => true
        ],
        [
            'name' => 'movies',
            'current' => false
        ],
        [
            'name' => 'tv',
            'current' => false
        ],
        [
            'name' => 'games',
            'current' => false
        ],
        [
            'name' => 'collectibles',
            'current' => false
        ],
        [
            'name' => 'videos',
            'current' => false
        ],
        [
            'name' => 'fans',
            'current' => false
        ],
        [
            'name' => 'news',
            'current' => false
        ],
        [
            'name' => 'shop',
            'current' => false
        ],
    ];


    
    return view('comics', [
        'navLinks' => $navLinks,
        'comics' => config('comics')
    ]);

    
});
