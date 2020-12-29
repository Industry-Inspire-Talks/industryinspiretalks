<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User_authentication;

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

Route::get('/',[User_authentication::class , 'getLogin'])->name('login');
Route::post('/login',[User_authentication::class , 'login']);
Route::get('/logout', [User_authentication::class,'logout']);
Route::get('/register',[User_authentication::class , 'getRegister']);
Route::post('/register',[User_authentication::class , 'register']);


Route::middleware(['auth'])->group( function()  
{  
  
    Route::view('/admindashboard','adminpages/admindashboard');
    Route::view('/admindashboard/components/buttons','adminpages/buttons');
    Route::view('/admindashboard/components/cards','adminpages/cards');
    Route::view('/admindashboard/utilities/colors','adminpages/colors');
    Route::view('/admindashboard/utilities/borders','adminpages/borders');
    Route::view('/admindashboard/utilities/animations','adminpages/animations');
    Route::view('/admindashboard/utilities/others','adminpages/others');


  
});  