<?php

namespace App\Http\Controllers;

use App\Projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\MyProjects;
use App\User;
use App\Skills;
use App\Contact;
class AdminController extends Controller
{
    public function dashboard()
    {

        $totalproject = MyProjects::count();
        $totalskill = Skills::count();
        $totalcontact = Contact::count();
        $totaluser = User::count();

        return view('admin.dashboard',[
            'totalproject'=>$totalproject,
            'totalskill'=>$totalskill,
            'totalcontact'=>$totalcontact,
            'totaluser'=>$totaluser,
        ]);

    }

    public function users()
    {
        $users = User::all();
        return view('admin.users')->with('users',$users);

    }

    public function projects()
    {
        $projects = MyProjects::all();
        return view('admin.projects')->with('projects',$projects);

    }

    public function skills()
    {
        $skills = Skills::all();
        return view('admin.skills')->with('skills',$skills);

    }

    public function uploadproject()
    {


        return view('admin.upload_project');

    }

    public function uploadskill()
    {


        return view('admin.upload_skill');

    }



    public function store(Request $request){

        $this->validate($request,[
            'name' => 'required',
            'language' => 'required',
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


        $projecct = new MyProjects;
        $projecct->name = $request->input('name');
        $projecct->desc = $request->input('desc');
        $projecct->project_language = $request->input('language');
        $projecct->image = $fileNameToStore;
        $projecct->save();
        return redirect('/projects')->with('status','post created');
    }


    public function save(Request $request){

        $this->validate($request,[
            'name' => 'required',
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


        $skill = new Skills;
        $skill->name = $request->input('name');
        $skill->image = $fileNameToStore;
        $skill->save();
        return redirect('/skills')->with('status','post created');
    }


    public function projectdelete($id)
    {

        $project = MyProjects::find($id);

        if($project->image != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/cover_images/'.$project->image);
        }

        $project->delete();
        return redirect('/projects')->with('status','Project is Deleted Sucessfully');

    }

    public function skilldelete($id)
    {

        $skill = Skills::find($id);

        if($skill->image != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/cover_images/'.$skill->image);
        }

        $skill->delete();
        return redirect('/skills')->with('status','Skill is Deleted Sucessfully');

    }


    public function projectedit($id){
        $project = MyProjects::findOrFail($id);
        return view('admin.edit')->with('project',$project);

    }


    public function updateproject(Request $request,$id){

        $this->validate($request,[
            'name' => 'required',
            'desc' => 'required',
            'language' => 'required',
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


        }


        $projecct = MyProjects::findOrFail($id);
        $projecct->name = $request->input('name');
        $projecct->desc = $request->input('desc');
        $projecct->project_language = $request->input('language');
        if($request->hasFile('image')){
            $projecct->image = $fileNameToStore;
        }
        $projecct->save();
        return redirect('/projects')->with('status','post updated');
    }


    public function contactlist()
    {
        $contacts = Contact::all();
        return view('admin.contact')->with('contacts',$contacts);

    }

    public function contactview($id){
        $contact = Contact::findOrFail($id);
        return view('admin.contactview')->with('contact',$contact);

    }


    public function contactdelete($id)
    {

        $contact = Contact::find($id);
        $contact->delete();
        return redirect('/contact')->with('status','Contact is Deleted Sucessfully');

    }








}
