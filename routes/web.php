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

    $menu = [
        ['name' => 'Characters', 'link' => '/characters', 'status' => false],
        ['name' => 'Comics', 'link' => '/', 'status' => true],
        ['name' => 'Movies', 'link' => '/movies', 'status' => false],
        ['name' => 'Tv', 'link' => '/tv', 'status' => false],
        ['name' => 'Games', 'link' => '/games', 'status' => false],
        ['name' => 'Collectibles', 'link' => '/collectibles', 'status' => false],
        ['name' => 'Videos', 'link' => '/videos', 'status' => false],
        ['name' => 'Fans', 'link' => '/fans', 'status' => false],
        ['name' => 'News', 'link' => '/news', 'status' => false],
        ['name' => 'Shop', 'link' => '/shop', 'status' => false],
    ];

    return view('home', compact('menu'));
});
