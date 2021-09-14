<?php

namespace App\Http\Controllers;

use App\User;
use App\Technology;
use yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
// use Datatables;
// use yajra\Datatables\Facades\Datatables;
use Illuminate\Http\Request as orginalRequest;
use App\Http\Requests\TechnologyRequest as Request;



class TechnologiesController extends Controller
{
    public function getTechnologies()
    {
        $technologiesTable = Technology::all();
        // foreach($technologies as $tech){
        //     dump($tech->name);
        // }

        return view('layouts.technologiesTable', compact('technologiesTable'));
    }


    public function update(Request $request)
    {
        $technology = Technology::find($request->id);



        $technology->update([
            'name' => $request->name,
            'icon_url' => $request->icon_url,
        ]);
        return Redirect::route('user', array(Auth::id()));
    }

    public function store(Request $request)
    {
        try {
            Technology::create(['name' => $request->name, 'icon_url' => $request->icon_url]);
            return Redirect::route('user', array(Auth::id()))->with('toast_success', 'Tecnologia creada correctamente');;
        } catch (\Exception $e) {
            Log::error('message');
            return redirect()->back()->with('toast_error', 'Error al crear tecnologia <br> Por favor verifica los datos');
        }
    }

    public function associate(OrginalRequest $orginalRequest)
    {
        // dd($RequestAsociate->id);
        try {
            if (Auth::id()) {
                $user = Auth::id();
                $GetUSer = User::find($user);
                $GetUSer->technologies()->attach($orginalRequest->id);
                return Redirect::route('user', array($user))->with('toast_success', 'Tecnologia asociada correctamente');
                // dd('entre');
            } else {
                return redirect()->back()->with('toast_error', 'Error al asociar tecnologia');
            }
        } catch (\Exception $e) {
            Log::error('message');
            return redirect()->back()->with('toast_error', 'Error por favor notifique al desarrollador');
        }
    }


    public function unassociate(OrginalRequest $orginalRequest)
    {
        // dd($RequestAsociate->id);
        try {
            if (Auth::id()) {
                $user = Auth::id();
                $GetUSer = User::find($user);
                $GetUSer->technologies()->detach($orginalRequest->id);
                return Redirect::route('user', array($user))->with('toast_success', 'Tecnologia desasociada correctamente');
                // dd('entre');
            } else {
                return redirect()->back()->with('toast_error', 'Error al asociar tecnologia');
            }
        } catch (\Exception $e) {
            Log::error('message');
            return redirect()->back()->with('toast_error', 'Error por favor notifique al desarrollador');
        }
    }

    public function destroy(OrginalRequest $orginalRequest)
    {
        // dd(Auth::id());
        if (Auth::id() !== 1) {
            return back()->withInput()->with('toast_error', 'No estas autorizado');
        }

        $Technology = Technology::find($orginalRequest->id);
        // dd(isset($Technology->relation));
        // dd(($Technology->users->count()));
        try {
            if (!($Technology->users->count())) {
                $Technology->delete();
                return Redirect::route('user', array('1'))->with('toast_success', 'Tecnologia eliminada correctamente');
            } else {
                return back()->withInput()->with('toast_error', 'Error al eliminar tecnologia. <br> Por favor verifica las asociaciones');
            }
        } catch (\Exception $e) {
            Log::error('message');
            return back()->withInput()->with('toast_error', 'Error al eliminar tecnologia. <br> Por favor comunicate a soporte');
        }
    }
}
