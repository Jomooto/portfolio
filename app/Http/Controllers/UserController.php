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
        
        if(!($user)){
            return back()->withInput()->with('toast_error', 'Usuario no encontrado');
        }
        $id = $user->id;
        
        $projects = $user->projects()->with('technologies')->get();

        $technologies4 = Technology::whereHas('users', function(Builder $query) use(&$id){
            $query->where('technologiable_id', '=', $id);
        })->get();

        $asociadosArray = [];
        foreach ($technologies4 as $technology){
            $asociadosArray[$technology->id] = $technology->name;
        }
        // dd($technologies4);

        $technologies3 = Technology::all();

        // dd($technologies4);

        $portfolioDatas = $user->portfolioData()->get();
        
        // dd($projects->name);

        $technologies = $user->technologies()->get();
        return view('layouts.body', compact(
            'projects',
            'user',
            'technologies',
            'technologies3',
            'technologies4',
            'portfolioDatas',
            'asociadosArray'));

    }

}
