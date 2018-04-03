<?php

namespace App\Http\Controllers;

use App\About;
use App\Client;
use App\Sms;
use App\Work;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){

        $publishedAboutInfo=About::where('publication_status',1)->first();
        $publishedWorks=Work::where('publication_status',1)->orderBy('id', 'desc')->take(4)->get();
        $publishedClients=Client::where('publication_status',1)->orderBy('id', 'desc')->take(3)->get();
        return view('front.home.home-content',
            [
                'publishedAboutInfo'=>$publishedAboutInfo,
                'publishedWorks'=>$publishedWorks,
                'publishedClients'=>$publishedClients

            ]);
    }


    public function ClientSms(Request $request){
        $this->validate($request, [
            'name' => 'required|regex:/^[\pL\s\-]+$/u',
            'email' => 'required|email|unique:sms,email',
            'subject' => 'required',
            'sms' => 'required',
        ]);

        $sms=new Sms();
        $sms->name = $request->name;
        $sms->email = $request->email;
        $sms->subject = $request->subject;
        $sms->sms = $request->sms;

        $sms->save();
        return view('front.includes.sucess-sms');
    }
}
