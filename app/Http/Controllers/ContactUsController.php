<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Http\Requests\ContactRequest;


class ContactUsController extends Controller
{

    public function contactus(){

        return view('contactus');
    }

    public function send(Request $request)
    {

        $data = array(
            'first_name'      =>  $request->first_name,
            'last_name'      =>  $request->last_name,
            'email'      =>  $request->email,
            'message'   =>   $request->message
        );

        Mail::to('info@winch.com')->send(new SendMail($data));
        return back()->with('success' , 'sent message success');

    }

    //    Route::get('user/{user}/balance', ['uses' => 'UserController@vacationsBalance', 'as' => 'admin.user.balance']);
}


