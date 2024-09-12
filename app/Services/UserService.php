<?php

namespace App\Services;

use App\Models\User;

class UserService
{
    public function getAllUsers()
    {
        return User::all();
    }

    public function findUserById($id)
    {
        return User::find($id);
    }

    public function createUser($data)
    {
        return User::create($data);
    }
}
