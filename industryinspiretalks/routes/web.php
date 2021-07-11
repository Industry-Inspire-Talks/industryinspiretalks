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


Route::view('/', 'pages.index');

Route::view('/about', 'pages.about');

Route::view('/community', 'pages.community');

Route::view('/events', 'pages.events');

Route::view('/episodes', 'pages.episodes');

Route::view('/stories', 'pages.stories');

Route::view('/inspire_class', 'pages.inspire_class');

Route::view('/ambassador', 'pages.ambassador');

Route::view('/careers', 'pages.careers');

Route::view('/contact', 'pages.contact');
