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
                'user_id' => auth()->user()->id,
            ] + $request->validated());
        return redirect('/');
    }
}
