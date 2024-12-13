<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;

class TestController extends Controller
{

    public function assignTask(){
        $user = User::find(2);
        $tasks = Task::where('flag', '1')->get();

        if($user->r_tasks()->syncWithoutDetaching($tasks)){
            return response()->json([
                'message' => 'Task assigned',
            ]);
        }

        return response()->json([
            'message' => 'No task to be assigned',
        ]);
    }

    public function deleteTask(){
        $user = User::find(2);
        $task = Task::where('flag', '1')->get();
        
        if($user->r_tasks()->detach($task)){
            return response()->json([
                'message' => 'Task deleted',
            ]);
        } 

        return response()->json([
            'message' => 'No task to be deleted',
        ]);
    }
}


