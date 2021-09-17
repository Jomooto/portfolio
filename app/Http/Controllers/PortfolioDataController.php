<?php

namespace App\Http\Controllers;

use App\PortfolioData;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\DataModalRequest as Request;

class PortfolioDataController extends Controller
{

    public function update(Request $request)
    {
        $data = PortfolioData::find($request->id);
        // dd($data);        
        // try {
            $data->update([
                'portfolTitle' => $request->portfolTitle,
                'picture' => $request->picture,
                'descriptionTitle' => $request->descriptionTitle,
                'description' => $request->description,
                'github' => $request->github,
                'linkedin' => $request->linkedin,
                'contactEmail' => $request->contactEmail
            ]);
            
            return Redirect::route('user', array(Auth::id()))->with('toast_success', 'Projecto actualizado correctamente');
        // } catch (\Exception $e) {
        //     Log::error('message');            
        //     return redirect()->back()->with('toast_error', 'Error al actualizar <br> Por favor verifica los datos');
        // }
    }
}