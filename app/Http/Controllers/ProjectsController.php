<?php

namespace App\Http\Controllers;

// use App\Project;
use App\Http\Requests\ProjectRequest as Request;
use App\Project;

class ProjectsController extends Controller
{
    public function index(){
        // $projects = Project::latest()->get();
        $projects = Project::lastest()->get();
//        $projects->technology();
        return view('projects', compact('projects'));
    }

    public function store(Request $request){
        Project::create($request->validated());
        return redirect('/');
    }
}
