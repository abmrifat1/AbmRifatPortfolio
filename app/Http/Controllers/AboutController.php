<?php

namespace App\Http\Controllers;

use App\About;
use DB;
use Illuminate\Support\Facades\Session;
use Image;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function addAbout(){
        return view('admin.about.add-about');
    }
    public function saveAboutInfo(Request $request){
      $aboutImage=$request->file('image');

        $imageName=$aboutImage->getClientOriginalName();
        $directory='about-images/';
        $imgUrl=$directory.$imageName;
        Image::make($aboutImage)->resize(200,200)->save($imgUrl);


        $about= new About();
        $about->name=$request->name;
        $about->profession=$request->profession;
        $about->description=$request->description;
        $about->work_title=$request->work_title;
        $about->work_description=$request->work_description;
        $about->experience_title=$request->experience_title;
        $about->experience_description=$request->experience_description;
        $about->education_title=$request->education_title;
        $about->education_description=$request->education_description;
        $about->achivement_title=$request->achivement_title;
        $about->achivement_description=$request->achivement_description;
        $about->address=$request->address;
        $about->phone_number=$request->phone_number;
        $about->web_site=$request->web_site;
        $about->publication_status=$request->publication_status;
        $about->image=$imgUrl;

        $about->save();


        Session::put('name',$request->name);

        return redirect('/add-about')->with('message','About info Save Successfully');

    }
    public function manageAboutInfo(){

        $abouts=DB::table('abouts')->get();


        return view('admin.about.manage-about',['abouts'=>$abouts]);
    }

    public function viewAboutInfo($id){

        $about=About::find($id);

        return view('admin.about.view-about',['about'=>$about]);
    }
    public function unpublishedAboutInfo($id){
        $aboutById= About::find($id);
        $aboutById->publication_status=0;
        $aboutById->save();
        return redirect('/manage-about')->with('message','about Info update Successfully');

    }

    public function publishedAboutInfo($id){
        $aboutById= About::find($id);
        $aboutById->publication_status=1;
        $aboutById->save();
        return redirect('/manage-about')->with('message','about Info update Successfully');

    }
    public function deleteAboutInfo($id){

        $aboutInfoById=About::find($id);
        unlink($aboutInfoById->image);
        $aboutInfoById->delete();
        return redirect('/manage-about')->with('message','about Info Delete Successfully');

    }
    public function editAboutInfo($id){
        $aboutInfo=About::find($id);
        return view('admin.about.edit-about',['aboutInfo'=>$aboutInfo]);
    }

    public function updateAboutInfo(Request $request){
        $aboutImage =$request->file('image');
        if($aboutImage){
          $about=About::find($request->about_id);
           unlink($about->image);

            $imageName=$aboutImage->getClientOriginalName();
            $directory='about-images/';
            $imgUrl=$directory.$imageName;
            Image::make($aboutImage)->resize(200,200)->save($imgUrl);



            $about->name=$request->name;
            $about->profession=$request->profession;
            $about->description=$request->description;
            $about->work_title=$request->work_title;
            $about->work_description=$request->work_description;
            $about->experience_title=$request->experience_title;
            $about->experience_description=$request->experience_description;
            $about->education_title=$request->education_title;
            $about->education_description=$request->education_description;
            $about->achivement_title=$request->achivement_title;
            $about->achivement_description=$request->achivement_description;
            $about->address=$request->address;
            $about->phone_number=$request->phone_number;
            $about->web_site=$request->web_site;
            $about->publication_status=$request->publication_status;
            $about->image=$imgUrl;


            $about->save();

        }
        else{

            $about=About::find($request->about_id);
            $about->name=$request->name;
            $about->profession=$request->profession;
            $about->description=$request->description;
            $about->work_title=$request->work_title;
            $about->work_description=$request->work_description;
            $about->experience_title=$request->experience_title;
            $about->experience_description=$request->experience_description;
            $about->education_title=$request->education_title;
            $about->education_description=$request->education_description;
            $about->achivement_title=$request->achivement_title;
            $about->achivement_description=$request->achivement_description;
            $about->address=$request->address;
            $about->phone_number=$request->phone_number;
            $about->web_site=$request->web_site;
            $about->publication_status=$request->publication_status;


            $about->save();


        }
        return redirect('manage-about');
    }

























}
