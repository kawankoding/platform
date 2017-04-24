<?php

namespace App\Providers;

use App\Models\Tag;
use App\Models\Series;
use App\Observers\SeriesObserver;
use App\Observers\TagObserver;
use Illuminate\Support\ServiceProvider;

class EloquentEventServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Tag::observe(TagObserver::class);
        Series::observe(SeriesObserver::class);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
