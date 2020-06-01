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


Route::get('agenda', function() {
    return view('/frontend/agenda');
});

Route::get('/test', function() {
    return view('/frontend/test');
});

Route::get('notifications', function() {
    return view('/frontend/notifications');
});

Route::get('friends', 'FriendController@index')->name('friends.index');

Route::delete('friends/{friend}', 'FriendController@destroy')->name('friends.destroy');

// Route::get('/search', 'SearchController@index')->name('search');

Route::get('/', 'TicketController@index')->name('home');

Route::post('/show', 'TicketController@showShowsByCity')->name('showShowsByCity');

Route::get(' ', 'TicketController@show')->name('show');