<?php

namespace App\Http\Controllers;

use App\Client;
use App\Sms;
use Image;
use DB;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function addClient(){
        return view('admin.client.add-client');
    }
    public  function saveClientInfo(Request $request){
        $clientImage=$request->file('image');

        $imageName=$clientImage->getClientOriginalName();
        $directory='client-images/';
        $imgUrl=$directory.$imageName;
        Image::make($clientImage)->resize(200,200)->save($imgUrl);


        $client= new Client();
        $client->name=$request->name;
        $client->designation=$request->designation;
        $client->description=$request->description;
        $client->cc_link=$request->cc_link;
        $client->cc_icon=$request->cc_icon;
        $client->publication_status=$request->publication_status;
        $client->image=$imgUrl;

        $client->save();

        return redirect('/add-client')->with('message','Client info Save Successfully');
    }

    public function manageClientInfo(){
        $clients=DB::table('clients')->get();
        return view('admin.client.manage-client',['clients'=>$clients]);
    }

    public function unpublishedClientInfo($id){

        $clientById= Client::find($id);
        $clientById->publication_status=0;
        $clientById->save();
        return redirect('/manage-client')->with('message','Client Info update Successfully');
    }

    public function publishedClientInfo($id){

        $clientById= Client::find($id);
        $clientById->publication_status=1;
        $clientById->save();
        return redirect('/manage-client')->with('message','Client Info update Successfully');
    }

    public function deleteClientInfo($id){
        $clientInfoById=Client::find($id);
        unlink($clientInfoById->image);
        $clientInfoById->delete();
        return redirect('/manage-client')->with('message','Client Info Delete Successfully');
    }

    public function editClientInfo($id){
        $clientInfo=Client::find($id);
        return view('admin.client.edit-client',['clientInfo'=>$clientInfo]);
    }

    public function updateClientInfo(Request $request){
        $clientImage =$request->file('image');
        if($clientImage){
            $client=Client::find($request->client_id);
            unlink($client->image);

            $imageName=$clientImage->getClientOriginalName();
            $directory='client-images/';
            $imgUrl=$directory.$imageName;
            Image::make($clientImage)->resize(200,200)->save($imgUrl);

            $client->name=$request->name;
            $client->designation=$request->designation;
            $client->description=$request->description;
            $client->cc_link=$request->cc_link;
            $client->cc_icon=$request->cc_icon;
            $client->publication_status=$request->publication_status;
            $client->image=$imgUrl;


            $client->save();

        }
        else{

            $client=Client::find($request->client_id);

            $client->name=$request->name;
            $client->designation=$request->designation;
            $client->description=$request->description;
            $client->cc_link=$request->cc_link;
            $client->cc_icon=$request->cc_icon;
            $client->publication_status=$request->publication_status;


            $client->save();


        }
        return redirect('manage-client');
    }
    public function showSms(){

        $sms=DB::table('sms')->get();


        return view('admin.message.show-sms',['sms'=>$sms]);
    }
    public function deleteSms($id){

        $clientSms=Sms::find($id);

        $clientSms->delete();

        return redirect('/client-message')->with('message','Client Info Delete Successfully');
    }
    public function editSmsInfo($id){
        $clientSms=Sms::find($id);
        return view('admin.message.reply-sms',['clientSms'=>$clientSms]);
    }













}
