<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Contact;
use App\Models\Project;
use Illuminate\Http\Request;


class HomeController extends Controller
{

    public function index()
    {
        $data['projects']=Project::published()->get();
        $data['blogs']=BlogPost::published()->latest()->take(3)->get();
        return view('protofolio',$data);
    }

    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'type' => 'required|string|in:Web Application,ERP System,Mobile App,Cloud / DevOps,Other',
            'message' => 'required|string|min:10|max:5000',
        ]);

        // Create the contact record
        $contact = Contact::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'type' => $validated['type'],
            'message' => $validated['message'],
        ]);

        // Redirect with success message
        return redirect()
            ->back()
            ->with('success', 'Thank you for your message! We\'ll get back to you within 24 hours.');
    }
}
