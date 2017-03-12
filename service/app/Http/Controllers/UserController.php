<?php

namespace App\Http\Controllers;
use App\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        $users = User::get();
        return ['users' => $users];
    }

    public function show($id){
        $user = User::query()->find($id);
        if(isset($user)){
            return ['user' => $user];
        } else {
            return ['error' => 'Wish Not Found'];
        }
    }


}
