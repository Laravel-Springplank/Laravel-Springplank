<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Models\Newsletter;

use Newsletter;

class NewsletterController extends Controller
{
    public function create()
    {
        return view('newsletter');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'email'         => ['required', 'email'],
        ]);

        if (!Newsletter::isSubscribed($request->email) )
        {
            Newsletter::subscribePending($request->email);
            return redirect()->back()->with('success', 'Thanks For Subscribe');
        }
        return redirect()->back()->with('success', 'Thanks For Subscribe');

    }
}


