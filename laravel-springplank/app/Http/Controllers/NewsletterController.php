<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use Newsletter;

class NewsletterController extends Controller
{
    public function create()
    {
        return view('newsletter');
    }

    public function store(Newsletter $newsletter)
    {
        // dd(request()->email);
        if ( ! Newsletter::isSubscribed(request()->email) )
        {
            Newsletter::subscribePending(request()->email);
            return redirect('newsletter')->with('success', 'Thanks For Subscribe');
        }
        return redirect('newsletter')->with('failure', 'Sorry! You have already subscribed ');

    }
}
