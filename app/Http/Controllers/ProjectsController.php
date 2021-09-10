<?php

namespace App\Http\Controllers;

// use App\Project;
use App\User;
use App\Project;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProjectRequest as request;




class ProjectsController extends Controller
{


    public function index(){
        
        $projects = Project::get();

        return view('layouts.projects', compact('projects'));
    }

    public function store(Request $request){
        

        $id =Auth::id();
        $user = User::find($id);
        
        $project = new Project([
            'name' => $request->name,
            'url' => $request->url,
            'git_url' => $request->git_url,
            'picture_url' => $request->picture_url,
        ]);


        try{
            
            $user->projects()->save($project);
            return Redirect::route('user', array($id))->with('toast_success', 'Projecto agregado correctamente');
        }catch(\Exception $e){
            Log::error('message');
            return redirect()->back()->with('toast_error', 'Por favor verifica los datos');
        }
        

    }

    public function update(Request $request){
        $Project = Project::find($request->id);
        
        try{
            $Project->update([
                'name' => $request->name,
                'url' => $request->url,
                'git_url' => $request->git_url,
                'picture_url' => $request->picture_url
            ]);
            return Redirect::route('user', array(Auth::id()))->with('toast_success', 'Projecto actualizado correctamente');
        }catch(\Exception $e){
            Log::error('message');
            return redirect()->back()->with('toast_error', 'Error al actualizar <br> Por favor verifica los datos');
        }
        
    
    }

    public function destroy(Request $request){
        

        $Project = Project::find($request->id);
        try{
            $Project->delete();
            return Redirect::route('user', array(Auth::id()))->with('toast_success', 'Proyecto eliminado correctamente');
        }catch(\Exception $e){
            Log::error('message');
            return redirect()->back()->with('toast_error', 'No se pudo eliminar el proyecto');
        }
        
    }
}
