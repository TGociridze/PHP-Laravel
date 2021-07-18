<?php

namespace App\Http\Controllers;

use App\Mail\PostCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index () {
    return view('emails.send');
    }

    public function send (Request $request) {
        $user = Auth::user();
        $data= [
            'text' => 'Your Post Has been created! ',
            'user_name' => $user->name,
        ];
         Mail::to($request->get('email'))->send(new PostCreated($data));
        echo "done";



    }



}
