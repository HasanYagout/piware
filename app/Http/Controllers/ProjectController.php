<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{

    public function view($slug)
    {
        $project=Project::where('slug',$slug)->first();
        return view('projects.view',['project'=>$project]);
    }
}
