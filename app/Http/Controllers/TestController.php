<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use App\Models\Game;

class TestController extends Controller
{

    public function showTask(){
        $user = User::find(2);
        return $user->r_tasks;
    }

    public function assignTask(){
        $user = User::find(2);
        $tasks = Task::where('flag', '1')->get();

        if($user->r_tasks()->sync($tasks)){
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

    public function addGame(){
        $game = new Game;

        $game->name = 'Game 1';
        $game->description = 'Description 1';
    


        if($game->save()){
            return response()->json([
                'message' => 'Game added',
            ]);
        }
    }
}


