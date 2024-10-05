<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GreetController extends Controller
{
    public function greet(Request $request){
        return "<h1>Hello $request->name</h1>";
    }
    public function GreetWithView(){
        return view('greet');
    }
}
