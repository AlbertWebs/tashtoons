<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SendMessage;

class HomeController extends Controller
{
    public function index(){
        return view('front.index');
    }

    public function send_message(Request $request){
        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;

        // Insert To Database
        $Message = new Message;
        $Message->name = $name;
        $message->email = $email;
        $Message->subject = $subject;
        $Message->message = $message;
        $Message->save();
        //Send Mail 
        SendMessage::SendMail($name,$email,$subject,$message);
    }
}
