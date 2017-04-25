<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Tag;
use App\Models\Series;
use App\Models\Video;
use App\Observers\BlogObserver;
use App\Observers\SeriesObserver;
use App\Observers\TagObserver;
use App\Observers\VideoObserver;
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
        Video::observe(VideoObserver::class);
        Blog::observe(BlogObserver::class);
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
