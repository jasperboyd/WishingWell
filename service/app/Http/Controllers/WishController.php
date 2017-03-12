<?php

namespace App\Http\Controllers;
use App\Models\Wish;

class WishController extends Controller
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
        $wishes = Wish::get();
        return ['wishes' => $wishes];
    }

    public function show($id){
        $wish = Wish::query()->find($id);
        if(isset($wish)){
            return ['wish' => $wish];
        } else {
            return ['error' => 'Wish Not Found'];
        }
    }


}
