<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Hires;
use App\Models\Specialities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HiresController extends Controller
{
    public function index(){
        $repairmen = User::where('role',2)->get();
        $specialities = Specialities::all();
        return view('hire',['repairmen'=>$repairmen,'specialities'=>$specialities ]);
    }

    public function store(Request $request){
        $user = Auth::User();
        $hire = new Hires;
        $hire->id_client = $user->id;
        $hire->id_repairman = $request->id_repairman;
        $hire->hire_day = $request->day;
        $hire->hire_time = $request->time;
        $hire->save();
        return redirect('hire');
    }

    public function accept($id){
        $hire = Hires::find($id);
        $hire->hire_status = "accepted";
        $hire->save();
        return redirect('profileR');
    }


    public function reject($id){
        $hire = Hires::find($id);
        $hire->hire_status = "rejected";
        $hire->save();
        return redirect('profileR');
    }
}
