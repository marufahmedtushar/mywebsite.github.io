<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\MyProjects;
use App\Skills;
class IndexController extends Controller
{
    public function index(){
        $project = MyProjects::all();
        $skill = Skills::all();
        return view('index')->with('project',$project)->with('skill',$skill);
    }



}
