<?php

namespace App\Policies;

use App\Models\User;
use App\Exceptions\AccessException;
use Illuminate\Support\Facades\Log;

class AccessPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function hasPermission(User $user){
        if($user->role_id == 1){
            return true;
        }

        Log::error('User does not have permission');
        throw new AccessException('User does not have permission');
    }
}
