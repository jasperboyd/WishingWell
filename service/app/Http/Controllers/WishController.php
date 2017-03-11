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
        $wish = Wish::query()->findOrFail($id);
        return ['wish' => $wish];
    }
}
