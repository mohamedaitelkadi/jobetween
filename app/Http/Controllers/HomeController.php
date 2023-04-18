<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Auth;
use App\Models\Specialities;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $specialities = Specialities::all();
        return view('home',['specialities'=>$specialities]);
    }
}
