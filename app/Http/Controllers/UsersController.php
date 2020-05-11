<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Cache;
class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {	
    	$all_users = DB::table('users')->where('type', 'User');
		$all_users = $all_users->get();
		$id_loop = '1';
		return view('pages.all_users')->with(['all_users'  => $all_users,'id_loop'  => $id_loop]);
    }
    public function view($id)
    {
    	$user = User::findOrFail($id);
    	if ($user) {
    		return view('pages/view_user')->with(['user'  => $user]);
    	}
    	else
    	{
    		return back();
    	}

    }
    public function delete(Request $request, $id)
    {		
    	$user = User::findOrFail($id);
    	$user->delete();
    	return back()
    			->with("Success", "You have successfully Deleted the User.");
    }
    public function userOnlineStatus()
    {
        $users = DB::table('users')->get();

        foreach ($users as $user) {
            if (Cache::has('user-is-online-' . $user->id))
                echo "User " . $user->name . " is online.";
            else
                echo "User " . $user->name . " is offline.";
        }
    }
}
