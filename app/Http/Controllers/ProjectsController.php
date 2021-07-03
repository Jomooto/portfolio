<?php

namespace App\Http\Controllers;

use App\Project;
use App\Http\Requests\ProjectRequest as Request;
class ProjectsController extends Controller
{
    public function index(){
        $projects = Project::latest()->get();
        return view('projects', compact('projects'));
    }

    public function store(Request $request){
        Project::create([
            'user_id' => $request->user_id,
            'name' => $request->name,
            'url' => $request->url,
            'picture_url' => $request->picture_url,
        ]);
        return redirect('/');
    }
}
