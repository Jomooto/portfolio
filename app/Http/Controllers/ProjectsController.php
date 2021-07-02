<?php

namespace App\Http\Controllers;

use App\Projects;
//use Illuminate\Http\Request;
use App\Http\Requests\ProjectRequest as Request;
class ProjectsController extends Controller
{
    public function index(){
        $projects = Projects::latest()->get();
        return view('projects', compact('projects'));
    }

    public function store(Request $request){
        dd($request->all());
        Projects::create([
            'user_id' => $request->user_id,
            'name' => $request->name,
            'url' => $request->url,
            'url_picture' => $request->url_picture,
        ]);
        return redirect('/');
    }
}
