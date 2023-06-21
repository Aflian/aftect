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
    return view('welcome',[
        "title" => "welcome"
    ]);
});

Route::get('/login', function () {
    return view('login',[
        "title" => "login",
        "img" => "img/ppandra.jpg",
        "name" => "afliandra sambega",
        "nim" => "210401208"
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard',[
        "title" => "dashboard",
        "img" => "img/ppandra.jpg",
        "name" => "afliandra sambega",
        "nim" => "210401208"
    ]);
});

Route::get('/jokian', function () {

    $paket = [
        [
            "paket" => "MS.WORD",
            "price" => "Rp.3000-,/Page",
            "penjoki" => "Afliandra"
        ],
        [
            "paket" => "MS.EXEL",
            "price" => "Rp.3000-,/Page",
            "penjoki" => "RAFIF"
        ]
];

    return view('jokian',[
        "title" => "jokian",
        "img" => "img/ppandra.jpg",
        "name" => "afliandra sambega",
        "nim" => "210401208",
        "paket"=> $paket
    ]);
});

