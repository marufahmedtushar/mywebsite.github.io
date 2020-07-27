<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\MyProjects;
use App\Skills;
use App\Contact;
class IndexController extends Controller
{
    public function index(){
        $project = MyProjects::all();
        $skill = Skills::all();
        return view('index')->with('project',$project)->with('skill',$skill);
    }

    public function contact(Request $request){

        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'msg' => 'required'
        ]);

        $contact = new Contact;
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->msg = $request->input('msg');
        $contact->save();
        return redirect('/')->with('status','post created');
    }





}
