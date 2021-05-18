<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Hash;
use App\Exports\MemberExport;
use Excel;

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
        //Validate user request
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:members',
        //     'phone' => 'required',
        //     'password' => 'required|min:5|max:12'
        // ]);
        //insert data into database
        $member = new Member;
        $member->first_name = $request->fname;
        $member->last_name = $request->lname;
        $member->email = $request->email;
        $member->phone_number = $request->phone;
        $member->role = 'ADMIN';
        $member->password = Hash::make($request->password);
        $save=$member->save();

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
        $userInfo = Member::where('email','=',$request->email)->first();
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
            return redirect('/auth/login');
        }
    }
    function dashboard(){
        $data = ['LoggedUserInfo'=>Member::where('id','=',session('LoggedUser'))->first()];
        return view('admin.dashboard',$data);
    }
    function update(request $request,$id){
        $member = Member::find($id);
        $member->first_name = $request->fname;
        $member->last_name = $request->lname;
        $member->email = $request->email;
        $member->phone_number = $request->phone;
         $member->role = 'ADMIN';
         $save=$member->save();



    }

    function delete($id){
        $member = Member::find($id);
        $member->delete();
        return $member;

    }

    public function exportIntoExcel(){
        return Excel::download(new MemberExport,'memberslist.xlsx');
    }
    public function exportIntoCSV(){
        return Excel::download(new MemberExport,'memberslist.csv');
    }

}
