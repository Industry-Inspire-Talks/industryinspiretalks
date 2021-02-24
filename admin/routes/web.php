<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\User_authentication;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\InspireStoriesController;




Route::get('/login', [User_authentication::class, 'getLogin'])->name('login');
Route::post('/login', [User_authentication::class, 'login']);
Route::get('/logout', [User_authentication::class, 'logout']);




Route::middleware(['auth'])->group(function () {

    // Route::view('/', 'admindashboard');

    Route::get('/', function () {
        return redirect('/staff/list');
    });

    Route::post('/inspire_stories/edit/{id}', [InspireStoriesController::class, 'edit_inspire_stories']);


    Route::get('/episodes/edit/{id}', [EpisodeController::class, 'get_episode_edit_page']);
    Route::post('/episodes/edit/{id}', [EpisodeController::class, 'edit_episode']);




    Route::get('/{tablename}/list', [CommonController::class, 'list']);
    Route::get('/{tablename}/edit/{id}', [CommonController::class, 'edit_page']);
    Route::post('/{tablename}/edit/{id}', [CommonController::class, 'edit']);
    Route::post('/{tablename}/add', [CommonController::class, 'add']);
    Route::get('/{tablename}/add', [CommonController::class, 'get_add_page']);









    // Route::get('/staff/list', [StaffController::class, 'staff_details']);
    // Route::get('/staff/add', [StaffController::class, 'staff_add_page']);
    // Route::post('/staff/add', [StaffController::class, 'add_staff']);
    // Route::get('/staff/edit/{id}',[StaffController::class, 'staff_edit_page']);
    // Route::post('/staff/edit/{id}',[StaffController::class, 'edit_staff']);

    // Route::get('/community/list', [CommunityController::class, 'community_details']);
    // Route::get('/community/add', [CommunityController::class, 'community_add_page']);
    // Route::post('/community/add', [CommunityController::class, 'add_community']);    
    // Route::get('/community/edit/{id}',[CommunityController::class, 'community_edit_page']);
    // Route::post('/community/edit/{id}',[CommunityController::class, 'edit_community']);

});
