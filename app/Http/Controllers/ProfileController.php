<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class ProfileController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	return view('pages/profile');
    }
    public function edit_page()
    {
    	return view('pages/edit_profile');
    }
    public function edit(Request $request)
	{
		$request->validate([
			'email' => ['string', 'email', 'max:255', 'unique:users'],
			'username' => ['string', 'max:255', 'unique:users'],
			'username' => ['string', 'max:255', 'unique:users'],
			'country' => ['string', 'max:255'],
			'gender' => ['string', 'max:255'],
		]);
		if(request()->has('avatar'))
        {
            $avataruploaded = request()->file('avatar');
            $avatarname = $avataruploaded->getClientOriginalName();
            $avatarpath = public_path('/avatars/');
            $avataruploaded->move($avatarpath, $avatarname);
            $user = Auth::user();
            $user->avatar = $avatarname;
        }
	  	$user = Auth::user();
	  	$user->name = $request->input('edited_name');
	  	$user->username = $request->input('edited_username');
	  	$user->email = $request->input('edited_email');
	  	$user->country = $request->input('edited_country');
	  	$user->gender = $request->input('edited_gender');
	  	
	  	$user->save();
	  	return back()
	  		->with('success', 'Your profile is updated');
	}
}
