<?php

namespace App\Models;

use App\Observers\GameObserver;
use Illuminate\Database\Eloquent\Model;
class Game extends Model
{
    protected static function booted(){
        self::observe(GameObserver::class);
    }
}
