<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;

class AuthenticateController extends Controller
{

    protected $userService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }


    public function login(Request $request)
    {

        $email = $request->input('email');
        $password = $request->input('password');

        return $this->userService->validLogin($email, $password);
    }

}
