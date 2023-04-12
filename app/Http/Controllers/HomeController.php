<?php

namespace App\Http\Controllers;

use Illuminate\Http\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }
}
