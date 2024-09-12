<?php

namespace App\Http\Controllers;

use App\Services\UserService;

class HelloController extends Controller
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


    public function hello()
    {
        return response()->json($this->userService->getAllUsers());
    }

}
