<?php

namespace App\Http\Controllers;
use App\Mail\TestMail;
use App\Mail\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(){
        $details = [
            'title'=>'Mail from laravel project',
            'body' =>'This is for testing email using gmail'

        ];
        Mail::to("jterlius@gmail.com")->send(new TestMail($details));
        return "Email sent";
    }
    public function contactUs(){
        return view('emails.contact');
    }
    public function send(){
        Mail::to(request('email'))->send(new contact());
        return redirect()->back();
    }
}
