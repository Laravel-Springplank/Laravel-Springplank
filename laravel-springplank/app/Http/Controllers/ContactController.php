<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;

class ContactController extends Controller
{
    public function index() {
        return view('contact');
    }
    public function send(Request $request)
    {
        $data = $request->validate([
            'name'          => ['required', 'string'],
            'email'         => ['required', 'email'],
            'message'       => ['required', 'string'],
        ]);

        $data = [
            'name'          => $request['name'],
            'email'         => $request['email'],
            'message'       => $request['message'],
        ];

        Mail::to(env('MAIL_USERNAME'))->send(new ContactEmail($data));

        return back()->with('success','Contact email sent!');
    }
}
