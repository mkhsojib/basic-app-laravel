<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){

      $this->validate($request, [
          'name' => 'required',
          'email' => 'required'

      ]);


// create a new message for database

$message = new Message;

$message->name = $request->input('name');
$message->email = $request->input('email');
$message->message = $request->input('message');


// save

$message->save();


// redirect

return redirect('/')->with('success', 'Message sent');



    }


    public function getMessages(){


      $messages = Message::orderBy('id', 'DESC')->get();


      return view('messages')->with('messages', $messages);






    }
}
