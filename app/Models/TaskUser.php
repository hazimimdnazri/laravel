<?php

namespace App\Models;

use App\Observers\TaskUserObserver;
use Illuminate\Database\Eloquent\Relations\Pivot;

class TaskUser extends Pivot
{
    protected static function booted(){
        static::observe(TaskUserObserver::class);
    }
}