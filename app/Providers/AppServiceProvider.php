<?php

namespace App\Providers;
use App\Models\Team;
use App\Models\Veiwee;
use App\Models\Option;
use App\Models\Target;
use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $teams = Team::all();
        $veiwees = Veiwee::all();
        $options = Option::all();
        $targets = target::all();
        $mincategories = Category::where('parent_id', 0)->orWhere('parent_id', null)->get();
        View::share('teams', $teams);
        View::share('veiwees', $veiwees);
        View::share('options', $options);
        View::share('targets', $targets);
        View::share('mincategories', $mincategories);
    }
}
