<?php

namespace App\Http\Controllers;

use App\Work;
use Image;
use DB;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function addWork(){
        return view('admin.work.add-work');
    }
    public function saveWorkInfo(Request $request){


            $workImage =$request->file('lw_image');

            $imageName=$workImage->getClientOriginalName();

            $directory='work-images/';
            $imgUrl=$directory.$imageName;

            Image::make($workImage)->resize(200,200)->save($imgUrl);



            $work= new Work();

            $work->wp_title=$request->wp_title;
            $work->wp_icon=$request->wp_icon;

            $work->publication_status=$request->publication_status;
            $work->lw_image=$imgUrl;

            $work->save();

            return redirect('/add-work')->with('message','Work info Save Successfully');


    }
    public function manageWorkInfo(){


            $works=DB::table('works')->get();


            return view('admin.work.manage-work',['works'=>$works]);
        }

    public function unpublishedWorkInfo($id){
        $workById= Work::find($id);
        $workById->publication_status=0;
        $workById->save();
        return redirect('/manage-work')->with('message','Work Info update Successfully');

    }

    public function publishedWorkInfo($id){
        $workById= Work::find($id);
        $workById->publication_status=1;
        $workById->save();
        return redirect('/manage-work')->with('message','Work Info update Successfully');

    }
    public function deleteWorkInfo($id){
        $workInfoById=Work::find($id);
        unlink($workInfoById->lw_image);
        $workInfoById->delete();
        return redirect('/manage-work')->with('message','Work Info Delete Successfully');
    }
    public function editWorkInfo($id){
        $workInfo=Work::find($id);
        return view('admin.work.edit-work',['workInfo'=>$workInfo]);
    }
    public function updateWorkInfo(Request $request){
        $workImage =$request->file('lw_image');
        if($workImage){
            $work=Work::find($request->work_id);
            unlink($work->lw_image);

            $imageName=$workImage->getClientOriginalName();
            $directory='work-images/';
            $imgUrl=$directory.$imageName;
            Image::make($workImage)->resize(200,200)->save($imgUrl);



            $work->wp_title=$request->wp_title;
            $work->wp_icon=$request->wp_icon;
            $work->publication_status=$request->publication_status;
            $work->lw_image=$imgUrl;


            $work->save();

        }
        else{

            $work=Work::find($request->work_id);
            $work->wp_title=$request->wp_title;
            $work->wp_icon=$request->wp_icon;
            $work->publication_status=$request->publication_status;


            $work->save();


        }
        return redirect('manage-work');
    }






}
