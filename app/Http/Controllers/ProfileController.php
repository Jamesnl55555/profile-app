<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function getAllProfile(){
        $profiles = Profile::all();
        return view('profiles', ['profiles' => $profiles]);
    }

    public function getProfile(Request $request){
        $profiles = Profile::where('id', $request->id)->get();
        return view('profile', ['profiles' => $profiles]);
    }
}
