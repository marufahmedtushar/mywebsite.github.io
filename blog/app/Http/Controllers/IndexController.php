<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Projects;
class IndexController extends Controller
{
    public function index(){
        $project = Projects::all();
        return view('index')->with('project',$project);
    }



}
