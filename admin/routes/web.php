<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\User_authentication;
use App\Http\Controllers\DatabaseController;


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

Route::get('/login', [User_authentication::class, 'getLogin'])->name('login');
Route::post('/login', [User_authentication::class, 'login']);
Route::get('/logout', [User_authentication::class, 'logout']);



Route::middleware(['auth'])->group(function () {

    Route::view('/', 'admindashboard');


    Route::get('/community/list', [DatabaseController::class, 'community_details']);
    Route::get('/staff/list', [DatabaseController::class, 'staff_details']);

    Route::get('/staff/add', [DatabaseController::class, 'staff_add_page']);
    Route::post('/staff/add', [DatabaseController::class, 'add_staff']);
    Route::get('/staff/edit/{id}',[DatabaseController::class, 'staff_edit_page']);
    Route::post('/staff/edit/{id}',[DatabaseController::class, 'edit_staff']);

    Route::get('/community/add', [DatabaseController::class, 'community_add_page']);
    Route::post('/community/add', [DatabaseController::class, 'add_community']);
    Route::get('/community/edit/{id}',[DatabaseController::class, 'community_edit_page']);
    Route::post('/community/edit/{id}',[DatabaseController::class, 'edit_community']);
    
    
});
