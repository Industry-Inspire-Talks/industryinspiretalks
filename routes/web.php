<?php

use App\Http\Controllers\CommonController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\InspireStoriesController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\IndustryLeaderController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\IndustryExpertController;
use App\Http\Controllers\InspireClassController;
use App\Models\Career;
use App\Models\Community;
use App\Models\Company;
use App\Models\Episode;
use App\Models\Event;
use App\Models\IndustryLeader;
use App\Models\InspireStory;
use App\Models\Series;
use App\Models\Staff;
use App\Models\IndustryExpert;
use App\Models\InspireClass;
use Illuminate\Support\Facades\Auth;
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

    Route::get('/login', fn () => Auth::check() ? redirect('/') : view('admin.login'))->name('login');

    Route::post('/login', [UserController::class, 'login']);

    Route::get('/logout', [UserController::class, 'logout']);


    Route::middleware(['auth'])->group(function () {

        // Route::view('/', 'admindashboard');

        Route::get('/', fn () => redirect('/staff'));

        Route::prefix('staff')->group(function () {
            Route::view('/', 'admin.pages.staff.list');

            Route::view('/add', 'admin.pages.staff.add');
            Route::post('/add', [StaffController::class, 'insert']);

            Route::get('/{staff}', fn (Staff $staff) => view('admin.pages.staff.edit', ['staff' => $staff]));
            Route::post('/{staff}', [StaffController::class, 'update']);
            
            Route::post('/{staff}/delete', [StaffController::class, 'delete']);
        });

        Route::prefix('community')->group(function () {
            Route::view('/', 'admin.pages.community.list');

            Route::view('/add', 'admin.pages.community.add');
            Route::post('/add', [CommunityController::class, 'insert']);

            Route::get('/{community}', fn (Community $community) => view('admin.pages.community.edit', ['community' => $community]));
            Route::post('/{community}', [CommunityController::class, 'update']);

            Route::post('/{community}/delete', [CommunityController::class, 'delete']);
        });

        Route::prefix('episodes')->group(function () {
            Route::view('/', 'admin.pages.episodes.list');

            Route::view('/add', 'admin.pages.episodes.add');
            Route::post('/add', [EpisodeController::class, 'insert']);

            Route::get('/{episode}', fn (Episode $episode) => view('admin.pages.episodes.edit', ['episode' => $episode]));
            Route::post('/{episode}', [EpisodeController::class, 'update']);

            Route::post('/{episode}/delete', [EpisodeController::class, 'delete']);
        });

        Route::prefix('inspire_stories')->group(function () {
            Route::view('/', 'admin.pages.inspire_stories.list');

            Route::view('/add', 'admin.pages.inspire_stories.add');
            Route::post('/add', [InspireStoriesController::class, 'insert']);

            Route::get('/{inspire_story}', fn (InspireStory $inspire_story) => view('admin.pages.inspire_stories.edit', ['inspire_story' => $inspire_story]));
            Route::post('/{inspire_story}', [InspireStoriesController::class, 'update']);

            Route::post('/{inspire_story}/delete', [InspireStoriesController::class, 'delete']);
        });

        Route::prefix('series')->group(function () {
            Route::view('/', 'admin.pages.series.list');

            Route::view('/add', 'admin.pages.series.add');
            Route::post('/add', [SeriesController::class, 'insert']);

            Route::get('/{series}', fn (Series $series) => view('admin.pages.series.edit', ['series' => $series]));
            Route::post('/{series}', [SeriesController::class, 'update']);

            Route::post('/{series}/delete', [SeriesController::class, 'delete']);
        });

        Route::prefix('events')->group(function () {
            Route::view('/', 'admin.pages.events.list');

            Route::view('/add', 'admin.pages.events.add');
            Route::post('/add', [EventController::class, 'insert']);

            Route::get('/{event}', fn (Event $event) => view('admin.pages.events.edit', ['event' => $event]));
            Route::post('/{event}', [EventController::class, 'update']);

            Route::post('/{event}/delete', [EventController::class, 'delete']);
        });

        Route::prefix('careers')->group(function () {
            Route::view('/', 'admin.pages.careers.list');

            Route::view('/add', 'admin.pages.careers.add');
            Route::post('/add', [CareerController::class, 'insert']);

            Route::get('/{career}', fn (Career $career) => view('admin.pages.careers.edit', ['career' => $career]));
            Route::post('/{career}', [CareerController::class, 'update']);

            Route::post('/{career}/delete', [CareerController::class, 'delete']);
        });

        Route::prefix('industry_leaders')->group(function () {
            Route::view('/', 'admin.pages.industry_leaders.list');

            Route::view('/add', 'admin.pages.industry_leaders.add');
            Route::post('/add', [IndustryLeaderController::class, 'insert']);

            Route::get('/{industry_leader}', fn (IndustryLeader $industry_leader) => view('admin.pages.industry_leaders.edit', ['industry_leader' => $industry_leader]));
            Route::post('/{industry_leader}', [IndustryLeaderController::class, 'update']);

            Route::post('/{industry_leader}/delete', [IndustryLeaderController::class, 'delete']);
        });

        Route::prefix('companies')->group(function () {
            Route::view('/', 'admin.pages.companies.list');

            Route::view('/add', 'admin.pages.companies.add');
            Route::post('/add', [CompanyController::class, 'insert']);

            Route::get('/{company}', fn (Company $company) => view('admin.pages.companies.edit', ['company' => $company]));
            Route::post('/{company}', [CompanyController::class, 'update']);

            Route::post('/{company}/delete', [CompanyController::class, 'delete']);
        });

        Route::prefix('industry_experts')->group(function () {
            Route::view('/', 'admin.pages.industry_experts.list');

            Route::view('/add', 'admin.pages.industry_experts.add');
            Route::post('/add', [CompanyController::class, 'insert']);

            Route::get('/{industry_expert}', fn (IndustryExpert $industry_expert) => view('admin.pages.industry_experts.edit', ['industry_expert' => $industry_expert]));
            Route::post('/{industry_expert}', [IndustryExpertController::class, 'update']);

            Route::post('/{industry_expert}/delete', [IndustryExpertController::class, 'delete']);
        });

        Route::prefix('inspire_classes')->group(function () {
            Route::view('/', 'admin.pages.inspire_classes.list');

            Route::view('/add', 'admin.pages.inspire_classes.add');
            Route::post('/add', [InspireClassController::class, 'insert']);

            Route::get('/{inspire_class}', fn (InspireClass $inspire_class) => view('admin.pages.inspire_classes.edit', ['inspire_class' => $inspire_class]));
            Route::post('/{inspire_class}', [InspireClassController::class, 'update']);

            Route::post('/{inspire_class}/delete', [InspireClassController::class, 'delete']);
        });


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
