<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    function login(){
        return view('auth.login');
        //echo 'login page';
    }
    function register(){
        return view('auth.register');
       // echo 'register page';
    }
    function save(Request $request){
        //Validate request
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:5|max:12'
        ]);
        //insert data into database
        $admin = new Admin;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $save=$admin->save();

        if($save){
            return back()->with('Success','New User has been successfuly added');
        }else{
            return back()->with('fail','Something went wrong try again');
        }
    }

    function check(Request $request){
        //return $request->input();
        //Validate request
        $request->validate([
            'email'=>'required|email',
            'password' => 'required|min:5|max:12'
        ]);
        $userInfo = Admin::where('email','=',$request->email)->first();
        if(!$userInfo){
            return back()->with('fail','Incorrect email address');
        }else{
            // check password
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser',$userInfo->id);
                return redirect('admin/dashboard');
            }else{
                return back()->with('fail','Incorrect password');
            }
        }
    }
    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('login');
        }
    }
    function dashboard(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('admin.dashboard',$data);
    }
}
