<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\HelloWorldShipped;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
      //  Mail::to($request->user())->send(new HelloWorldShipped());
        
        return view('home');
    }
    
}
