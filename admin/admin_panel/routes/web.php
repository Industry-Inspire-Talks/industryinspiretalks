<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\user_authentication;

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

Route::get('/',[user_authentication::class , 'getLogin'])->name('login');
Route::post('/login',[user_authentication::class , 'login']);
Route::get('/register',[user_authentication::class , 'getRegister']);
Route::post('/register',[user_authentication::class , 'register']);
Route::view('/adminpanel','adminpages/adminpanel')->middleware('auth');

