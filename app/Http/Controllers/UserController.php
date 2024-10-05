<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function getAllUsers(){
        $users = User::all();
        echo "Hello";
        //Return view with data
    return view('users', ['users' => $users /* this is a json syntax */]);
    }
}
