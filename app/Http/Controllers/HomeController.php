<?php

namespace App\Http\Controllers;

use App\Models\Project;

class HomeController extends Controller
{

    public function index()
    {
        $data['projects']=Project::published()->get();
        return view('protofolio',$data);
    }
}
