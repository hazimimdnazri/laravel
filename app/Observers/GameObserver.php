<?php

namespace App\Observers;

use App\Models\Game;

class GameObserver
{
    public function creating(Game $game)
    {
        $game->added_by = auth()->user()->id;
    }
}
