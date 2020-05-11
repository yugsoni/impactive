<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    function send(Request $request)
    {
        $this->validate($request,[
            'f_name' => 'required',
            'l_name' => 'required',
            'subject' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $data = array(
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'subject' => $request->subject,
            'message' => $request->message
        );
        Mail::to('yug.spider@gmail.com')->send(new SendMail($data));
        return back()->with('success', 'Thanks For contact us');
    }
    public function dashboard()
    {
        return view('index');
    }
}
