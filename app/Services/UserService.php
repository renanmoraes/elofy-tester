<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

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

    public function validLogin(string $email, string $password)
    {
        try {
            if(!$this->isValidEmail($email))
                return response()->json("Invalid email", 400);

            if(strlen($password) < 6)
                return response()->json("Invalid password", 400);

            $user = User::where(['email' => $email])->firstOrFail();

            if(!(Hash::check($password, $user->password)))
                return response()->json("Invalid password", 400);

            return $user;
        } catch (\Exception $exception){
            echo $exception->getMessage();
            return response()->json("User not found", 401);
        }

    }

    protected function isValidEmail(string $email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}
