<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Mail\ConctactFormMailable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use App\Notifications\ContactFormNotification;

class ContactController extends Controller
{

    public function index(){
        
        return view('layouts.contactForm');
    }

    public function store(Request $request){
        
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);

        $email = new ConctactFormMailable($request->all());
        try {
            Mail::to('joex45125@gmail.com')->send($email);
            // dd($request->id);
            return redirect()->route('user', $request->id)->with('success', 'Mensaje Enviado');
        
        }catch(\Exception $e) {
            Log::error('message');
            return redirect()->back()->with(['error' => 'Try later']);
        } 

    }

}
