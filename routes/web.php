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



Route::get('login', function() {
    return view('/auth/login');
});

Route::get('register', function() {
    return view('/auth/register');
});

Route::get('myshow', function() {
    return view('/frontend/myshow');
});

Route::get('/test', function() {
    return view('/frontend/test');
});

Route::get('friends', function() {
    return view('/frontend/friends');
});

Route::get('notifications', function() {
    return view('/frontend/notifications');
});

Route::get('profile', function() {
    return view('/frontend/profile');
});

Route::get('/', function() {
    return view('/frontend/home');
});

