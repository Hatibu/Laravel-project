<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class userProfileController extends Controller
{

    function index(){
        $members = Member::all();
        $data = ['LoggedUserInfo'=>Member::where('id','=',session('LoggedUser'))->first()];
        return view('admin.userProfile',$data,['users'=>$members]);

    }

}
