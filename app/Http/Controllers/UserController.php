<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        $users = User::latest()->get();
        return view('users', compact('users'));
    }

    public function getProjects($id){
        
        $users = User::find($id);
        
        // $projects = $users->projects;
        $projects = $users->projects()->with('technologies')->get();
        return view('projects', compact('projects'));

    }
}
