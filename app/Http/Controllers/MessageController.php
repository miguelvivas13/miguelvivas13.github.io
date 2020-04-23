<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

use App\Mail\MessageReceived;

class MessageController extends Controller
{
    public function store (Request $request){


    	$message = request()->validate([
    		'name' => 'required',
    		'email' => 'required|email',
    		'subject' => 'required',
    		'content' => 'required|min:5'


    	]
    	);
    	Mail::to('vivasmiguel96@gmail.com')->queue(new MessageReceived($message));



    return back()->with('status', 'Recibimos tu mensaje');

}




    }
