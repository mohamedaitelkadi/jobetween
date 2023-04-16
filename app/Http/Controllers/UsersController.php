<?php

namespace App\Http\Controllers;
use Session;
use App\Models\User;
use App\Models\Hires;
use App\Models\Specialities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function signup(Request $request)
    {   
        $request->validate([
            'usertype',
            'fullname' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:6',
            'price' => 'required',
            'phone_number' => 'required',
            'speciality' => 'required',
            'city' => 'required',
            // 'profile_picture',
        ]);
            
        $data = $request->all();
        if($request['usertype'] == "repairman"){
             $check = $this->create_r($data);
             return redirect('/');
        }
        else{
            $check = $this->create_c($data);
            return redirect('/');
        }
    }

    public function create_r(array $data)
    {
        return User::create([
            'fullname' => $data['fullname'],
            'email' => $data['email'],
            'phone_number' => $data['phone_number'],
            'speciality' => $data['speciality'],
            'city' => $data['city'],
            'price' => $data['price'],
            // 'profile_picture' => $data['profile_picture'],
            'password' => Hash::make($data['password']),
            'role' => 2,
        ]);
    } 

    public function create_c(array $data)
    {
        return User::create([
            'fullname' => $data['fullname'],
            'email' => $data['email'],
            'phone_number' => $data['phone_number'],
            'city' => $data['city'],
            // 'profile_picture' => $data['profile_picture'],
            'password' => Hash::make($data['password']),
            'hire_status' => "waiting",
            'role' => 1,
        ]);
    } 


    public function signin(Request $request)
    {
        $request->validate
        ([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email','password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/admin');
        }
        return redirect('/');
    }



    public function dashboard(){
        $hires = Hires::all();
        $clients = User::where('role',1)->get(); 
        $repairmen = User::where('role',2)->get(); 
        $specialities = Specialities::all(); 
        return view('admin',[
                    'clients'=>$clients ,
                    'repairmen'=>$repairmen ,
                    'specialities'=>$specialities,
                    'hires'=>$hires
         ]);
    }


    public function client_profile(){
        $user = Auth::User();
        $hires = Hires::where('id_client',$user->id)->get();
        
        return view('clientprofile',['hires'=>$hires]);
    }


    public function repairman_profile($id){
        $client = Auth::User();
        $repairman = User::find($id);
        $hires = Hires::where('id_client', $client->id)->where('id_repairman' , $id)->get();
       return view('repairprofile',['repairman'=>$repairman,'hires'=>$hires]);   
    }


    public function personal_profile(){
        $user = Auth::User();
        $hires = Hires::where('id_repairman',$user->id)->get();
        return view('personalprofile',['hires'=>$hires,'user'=>$user]);
    }


    public function signout()
    {
        session::flush();
        Auth::logout();

        return redirect('/');
    }


    public function edit_repair_profile(Request $request){
        
        $user = Auth::User();
        $data = $request->validate([
            'fullname' => 'required',
            'email' => 'required',
            'password' => 'required|min:6',
            'phone_number' => 'required',
            'speciality' => 'required',
            'city' => 'required',
        ]);
        
        if (Hash::check($data['password'],$user->password )) {
            $user->fullname = $data['fullname'];
            $user->email = $data['email'];
            $user->phone_number = $data['phone_number'];
            $user->speciality = $data['speciality'];
            $user->city = $data['city'];
            $user->save();
            return redirect('profileR')->with('success','successfully updated');
        }
    
        return redirect('profileR')->with('failure','incorrect password');
    }


    

    
}
