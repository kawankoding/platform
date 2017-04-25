<?php

namespace App\Observers;

use App\Models\Video;

class VideoObserver
{
    public function creating(Video $video)
    {
        $video->slug = str_slug($video->title);
    }
}