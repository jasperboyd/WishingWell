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

    public function register(Request $request)
    {

	$user = new User;
	$user->email = $request->input('email');
	$user->name = $request->input('name');
	$user->password = Hash::make($request->input('password'));

	$user->save();
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
