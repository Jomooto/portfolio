<?php

namespace App\Http\Controllers;

use App\User;
use App\Technology;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class UserController extends Controller
{
    public function index(){

        $users = User::latest()->get();
        return view('layouts.users', compact('users'));
    }

    public function getProjects($id){
        
        $user = User::find($id);
        $id = $user->id;
        
        $projects = $user->projects()->with('technologies')->get();

        // technologies2 are unassigned technologies
        $technologies2 = Technology::whereDoesntHave('users', function(Builder $query) use(&$id){
            $query->where('technologiable_id', '=', $id);
        })->get();

        // $technologies4 = Technology::whereRelation('users', 'technologiable_id', true)->get();

        // $technologies4 = Technology::has('users', function(Builder $query) use(&$id){
        //     $query->where('technologiable_id', '=', $id);
        // })->get();

        $technologies4 = Technology::whereHas('users', function(Builder $query) use(&$id){
            $query->where('technologiable_id', '=', $id);
        })->get();

        // dd($technologies4);

        $technologies3 = Technology::all();

        $portfolioDatas = $user->portfolioData()->get();
        // dd($projects->name);

        $technologies = $user->technologies()->get();
        return view('layouts.body', compact(
            'projects',
            'user',
            'technologies',
            'technologies2',
            'technologies3',
            'technologies4',
            'portfolioDatas'));

    }

}
