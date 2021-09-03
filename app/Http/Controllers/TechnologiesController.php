<?php

namespace App\Http\Controllers;

use App\User;
use App\Technology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class TechnologiesController extends Controller
{
    public function store(Request $request){


        $request->validate([
            'name' => 'required',
            'icon_url' => 'required| url'
        ]);
        // $user =  Auth::id();
        // dd($user);
        // $technology = new Technology(['name' => $request->name, 'icon_url' => $request->icon_url]);
        // dd($user);
        // $user->technology()->save($technology);
        // dd($request->id);
        Technology::create(['name' => $request->name, 'icon_url' => $request->icon_url]);
        return Redirect::route('user', array(Auth::id()));
    }

    public function associate (Request $request){
        $user =Auth::id();
        if($request->id != 'null'){
            $GetUSer = User::find($user);
            $GetUSer->technologies()->attach($request->id);
        }

        // return Redirect::route('user', array($user));
        return Redirect::route('user', array($user));

    }
}
