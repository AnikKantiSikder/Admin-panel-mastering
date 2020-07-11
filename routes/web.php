<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    //return view('welcome');

    return redirect()->route('login');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/inbox', function(){

    echo "Inbox";
})->name('inbox');

Route::get('/calendar', function(){

    echo "calendar";
})->name('calendar');

Route::get('/typography', function(){

    echo "typography";
})->name('typography');
