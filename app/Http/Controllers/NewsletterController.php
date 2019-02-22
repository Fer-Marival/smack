<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class NewsletterController extends Controller
{
    public function create()
    {
    	return view('frontend.home');
    }
    public function store(Request $request)
    {
    	if ( ! Newsletter::isSubscribed($request->email) )
    	{
    		//\log::info($request)
    		Newsletter::isSubscribedPending($request->email);
    		return redirect('frontend.home')->with('success', 'thanks for suscribe');
    	}
    return redirect('frontend.home')->with('failure', 'sorry! You Have already suscribed');
   }
}
