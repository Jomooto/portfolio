<?php

namespace App\Http\Controllers;

use App\User;
use App\Technology;
use Illuminate\Http\Request as orginalRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\TechnologyRequest as Request;
// use Datatables;
// use yajra\Datatables\Facades\Datatables;
use yajra\Datatables\Datatables;



class TechnologiesController extends Controller
{
    public function getTechnologies(){
        $technologiesTable = Technology::all();
        // foreach($technologies as $tech){
        //     dump($tech->name);
        // }
        
        return view('layouts.technologiesTable', compact('technologiesTable'));
    }


    public function update (Request $request){
        $technology = Technology::find($request->id);
        
        

        $technology->update([
            'name' => $request->name,
            'icon_url' => $request->icon_url,
        ]);
        return Redirect::route('user', array(Auth::id()));
    }

    public function store(Request $request){


        // $request->validate([
        //     'name' => 'required',
        //     'icon_url' => 'required| url'
        // ]);
        // $user =  Auth::id();
        // dd($user);
        // $technology = new Technology(['name' => $request->name, 'icon_url' => $request->icon_url]);
        // dd($user);
        // $user->technology()->save($technology);
        // dd($request->id);
        Technology::create(['name' => $request->name, 'icon_url' => $request->icon_url]);
        return Redirect::route('user', array(Auth::id()));
    }

    public function associate(OrginalRequest $orginalRequest){
        // dd('llegue xxxx');
        
        // dd('llegue Aqui');
        // dd($RequestAsociate->id);
        if(Auth::id()){
            $user =Auth::id();
            $GetUSer = User::find($user);
            $GetUSer->technologies()->attach($orginalRequest->id);
            return Redirect::route('user', array($user));
            // dd('entre');
        }
            
        // return Redirect::route('user', array($user));
        return Redirect::route('home');

    }

    public function destroy (OrginalRequest $orginalRequest){

        $Technology = Technology::find($orginalRequest->id);
        // dd(isset($Technology->relation));
        // dd(($Technology->users->count()));
        if($Technology->users->count()){
            $Technology->delete();
            return Redirect::route('user', array(Auth::id()));
        }
        // dd('no entre');
        
        return back()->withInput();

    }
}
