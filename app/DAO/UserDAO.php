<?php

namespace App\DAO;

use App\Models\User;
use Illuminate\Support\Facades\Cache;

class UserDAO
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getUserById($id){
        return Cache::remember("user_{$id}", 60, function () use ($id){
            return User::find($id);
        });
    }

    public function createUser(array $data){
        $user = User::create($data);
        Cache::put("user_{$user->id}", $user, 60);
        return $user;
    }

    public function updateUser($id,array $data){
        $user=User::findOrfail($id);
        $user->update($data);
        Cache::put("user_{$id}", $user, 60);
        return $user;
    }
}
