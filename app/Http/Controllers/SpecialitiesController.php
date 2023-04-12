<?php

namespace App\Http\Controllers;
use App\Models\Specialities;
use Illuminate\Http\Request;

class SpecialitiesController extends Controller
{
    public function store(Request $request)
    {
        $speciality = new Specialities;
        $speciality->name_speciality = $request->speciality ;
        $speciality->save();
        return redirect('admin');
    }
}
