<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Project;

class BlogController extends Controller
{

    public function index()
    {
        $data['posts']=BlogPost::published()->paginate();
        return view('blog.index',$data);
    }
}
