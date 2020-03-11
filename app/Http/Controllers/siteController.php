<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Mail;
use Sessoin;


class siteController extends Controller
{
    public function index(){
//        return App::getLocale();
        return view('index');
    }


    public function partners(){

        return view('partners');
    }


    public function help(){

        return view('help');
    }


    public function usingApp(){

        return view('helpPages.usingApp');
    }


    public function accountAndPayment(){

        return view('helpPages.accountAndPayment');
    }


    public function managingRequests(){

        return view('helpPages.managingRequests');
    }


    public function privacyPolicy(){

        return view('helpPages.privacyPolicy');
    }


    public function joiningWinch(){

        return view('helpPages.joiningWinch');
    }


    public function usingTheApp(){

        return view('helpPages.usingTheApp');
    }


    public function accountManagement(){

        return view('helpPages.accountManagement');
    }


    public function gettingPaid(){

        return view('helpPages.gettingPaid');
    }


    public function furniture(){

        return view('servicePages.furniture');
    }


    public function transportGoods(){

        return view('servicePages.transportGoods');
    }


    public function towingService(){

        return view('servicePages.towingService');
    }


    public function becomeCaptain(){

        return view('servicePages.becomeCaptain');
    }


    public function aboutus(){

        return view('aboutus');
    }


    public function contactus(){

        return view('contactus');
    }


    public function mailContact(Request $request){

        $data = array(

            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'message'=>$request->message

        );
      Mail::send('email.contactus',$data,function ($message) use ($data)
      {
          $message->to($data['email']);
          $message->subject($data['message']);
          $message->from($data['INFO@WINCH.COM ']);

      });
        session::flash('sent successfully');
        return redirect('/contactus');
    }
}
