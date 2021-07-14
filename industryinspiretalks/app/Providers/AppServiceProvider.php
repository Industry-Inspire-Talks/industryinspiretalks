<?php

namespace App\Providers;

use App\Models\Career;
use App\Models\Community;
use App\Models\Company;
use App\Models\Episode;
use App\Models\Event;
use App\Models\IndustryExpert;
use App\Models\IndustryLeader;
use App\Models\InspireStory;
use App\Models\Series;
use App\Models\Staff;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //

        View::share('staffs', Staff::all());
        View::share('events', Event::all());
        View::share('members', Community::all());
        View::share('companies', Company::all());
        View::share('episodes', Episode::all());
        View::share('all_series', Series::all());
        View::share('inspire_stories', InspireStory::all());
        View::share('industry_leaders', IndustryLeader::all());
        View::share('careers', Career::all());
        View::share('industry_experts', IndustryExpert::all());
    }
}
