<?php

namespace App\Observers;

use App\Models\Series;

class SeriesObserver
{
    public function creating(Series $series)
    {
        $series->slug = str_slug($series->title);
    }
}