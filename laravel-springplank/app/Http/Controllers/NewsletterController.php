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

<<<<<<< Updated upstream
    public function store(Newsletter $newsletter)
    {
        // dd(request()->email);
        if ( ! Newsletter::isSubscribed(request()->email) )
        {
            Newsletter::subscribePending(request()->email);
            return redirect('newsletter')->with('success', 'Thanks For Subscribe');
=======
//    /**
//     *  @param \App\Models\Newsletter
//     *  @return \Illuminate\Http\Response
//     */

    public function store(Request $request)
    {
        $data = $request->validate([
            'email'         => ['required', 'email'],
        ]);

        if (!Newsletter::isSubscribed($request->email) )
        {
            Newsletter::subscribePending($request->email);
            return redirect()->back()->with('success', 'Thanks For Subscribe');
>>>>>>> Stashed changes
        }
        return redirect()->back()->with('success', 'Thanks For Subscribe');

    }
}


