<?php

namespace App\Models;

use App\Observers\TaskUserObserver;
use Illuminate\Database\Eloquent\Model;

class TaskUser extends Model
{
    protected $table = 'task_user';
    protected $fillable = ['task_id', 'user_id', 'assigned_by'];

    protected static function booted(){
        static::observe(TaskUserObserver::class);
        
    }

    
}