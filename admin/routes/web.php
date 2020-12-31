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

    Route::get('/staff/add', function () {
        return view('pages.staff.add');
    });

    Route::get('/staff/edit/{id}', function ($id) {
        // $staff = DB::table('staff')->where('id', $id)->distinct()->get();
        $staff = DB::table('staff')->where('id', $id)->distinct()->first();

        return view('pages.staff.edit', compact('staff'));
    });
});
