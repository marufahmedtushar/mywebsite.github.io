<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Projects;
use App\User;
class AdminController extends Controller
{

    public function users()
    {
        $users = User::all();
        return view('admin.users')->with('users',$users);

    }

    public function projects()
    {
        $projects = Projects::all();
        return view('admin.projects')->with('projects',$projects);

    }

    public function uploadproject()
    {


        return view('admin.upload_project');

    }

    public function store(Request $request){

        $this->validate($request,[
            'name' => 'required',
      
            'desc' => 'required',
            'image' => 'image|nullable|max:1999'
        ]);

        //file upload
        //file upload
        if($request->hasFile('image')){
            //get file name  with the  extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            //file name to  store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('image')->storeAs('public/cover_images',$fileNameToStore);


        }else{
            $fileNameToStore = 'noimage.jpg';
        }


        $projecct = new Projects;
        $projecct->name = $request->input('name');
        $projecct->desc = $request->input('desc');

        $projecct->image = $fileNameToStore;

        $projecct->save();
        return redirect('admin.projects')->with('status','post created');
    }

}
