<?php

use App\Http\Controllers\CommonController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\InspireStoriesController;
use App\Http\Controllers\User_authentication;
use App\Models\Series;
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

Route::domain('admin.' . str_replace('admin.', '', request()->getHost()))->group(function () {

    Route::get('/login', [User_authentication::class, 'getLogin'])->name('login');
    Route::post('/login', [User_authentication::class, 'login']);
    Route::get('/logout', [User_authentication::class, 'logout']);


    Route::middleware(['auth'])->group(function () {

        // Route::view('/', 'admindashboard');

        Route::get('/', function () {
            return redirect('/staff/list');
        });

        Route::view('/staff', 'admin.pages.staff.list');
        Route::view('/staff/add', 'admin.pages.staff.add');

        Route::view('/community', 'admin.pages.community.list');
        Route::view('/episodes', 'admin.pages.episodes.list');
        Route::view('/inspire_stories', 'admin.pages.inspire_stories.list');
        Route::view('/series', 'admin.pages.series.list');
        Route::view('/events', 'admin.pages.events.list');
        Route::view('/careers', 'admin.pages.careers.list');
        Route::view('/industry_leaders', 'admin.pages.industry_leaders.list');
        Route::view('/companies', 'admin.pages.companies.list');

        Route::post('/inspire_stories/edit/{id}', [InspireStoriesController::class, 'edit_inspire_stories']);
        Route::post('/inspire_stories/add', [InspireStoriesController::class, 'add_inspire_stories']);
        // Route::get('/inspire_stories/list', [InspireStoriesController::class, 'inspire_stories']);

        Route::get('/episodes/edit/{id}', [EpisodeController::class, 'get_episode_edit_page']);
        Route::post('/episodes/edit/{id}', [EpisodeController::class, 'edit_episode']);

        Route::get('/{tablename}/list', [CommonController::class, 'list']);
        Route::get('/{tablename}/edit/{id}', [CommonController::class, 'edit_page']);
        Route::post('/{tablename}/edit/{id}', [CommonController::class, 'edit']);
        Route::post('/{tablename}/add', [CommonController::class, 'add']);
        Route::get('/{tablename}/add', [CommonController::class, 'get_add_page']);
    });
});

Route::view('/', 'pages.index');

Route::view('/about', 'pages.about');

Route::view('/community', 'pages.community');

Route::view('/events', 'pages.events');

Route::view('/episodes', 'pages.episodes');
Route::get('/episodes/{series}', fn (Series $series) => view('pages.episode', ['series' => $series]));

Route::view('/stories', 'pages.stories');

Route::view('/inspire_class', 'pages.inspire_class');

Route::view('/ambassador', 'pages.ambassador');

Route::view('/careers', 'pages.careers');

Route::view('/contact', 'pages.contact');
