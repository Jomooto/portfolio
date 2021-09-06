<?php

namespace App\Http\Controllers;

// use App\Project;
use App\User;
use App\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProjectRequest as Request;



class ProjectsController extends Controller
{


    public function index(){
        // $projects = Project::latest()->get();
        // $projects = Project::lastest()->get();
        $projects = Project::get();
//        $projects->technology();
        return view('layouts.projects', compact('projects'));
    }

    public function store(Request $request){
        // dd($request->picture_url);

        $id =Auth::id();
        $user = User::find($id);
        $project = new Project([
            'name' => $request->name,
            'url' => $request->url,
            'git_url' => $request->git_url,
            'picture_url' => $request->picture_url,
        ]);

        
        
        $user->projects()->save($project);

        return Redirect::route('user', array($id));

    }

    public function update(Request $request){
        $Project = Project::find($request->id);
        // dd($projectId->name);

        $Project->update([
            'name' => $request->name,
            'url' => $request->url,
            'git_url' => $request->git_url,
            'picture_url' => $request->picture_url
        ]);
        return Redirect::route('user', array(Auth::id()));
    }

    public function destroy(Request $request){
        // dd('here');

        $Project = Project::find($request->id);
        $Project->delete();
        return Redirect::route('user', array(Auth::id()));
    }
}
