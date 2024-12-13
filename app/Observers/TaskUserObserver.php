<?php

namespace App\Observers;

use App\Models\TaskUser;

class TaskUserObserver
{
    public function creating(TaskUser $taskUser)
    {
        $taskUser->assigned_by = auth()->user()->id;
        $taskUser->created_at = now();
        $taskUser->updated_at = now();
    }

    public function created(TaskUser $taskUser)
    {
        //
    }

    public function deleting(TaskUser $taskUser)
    {
        //
    }

    public function deleted(TaskUser $taskUser)
    {
        //
    }
}
