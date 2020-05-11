<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Auth;
use App\ThemeUpload;
class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // Dashboard - Analytics
    public function dashboardAnalytics(){
        $pageConfigs = [
            'pageHeader' => false
        ];

        $find_id_theme = Auth::user()->id;

        $ad_id_find = DB::table('theme_uploads')->where('user_name', 'LIKE', '%' . $find_id_theme . '%')->count();

        $queue_id_find = DB::table('theme_queues')->where('user_name', 'LIKE', '%' . $find_id_theme . '%')->count();

        $ad_category_id = DB::table('create_categories')->where('usr_id', 'LIKE', '%' . $find_id_theme . '%')->count();


        $user_downloads = DB::table('downloads')->where('user_id', 'LIKE', '%' . $find_id_theme . '%')->count();

        $all_theme = DB::table('theme_uploads')->count();

        $all_categories = DB::table('create_categories')->count();

        $all_downloads = DB::table('downloads')->count();
        $id_loop = '1';
        $all_users_id = DB::table('users')->count();
        $all_users = DB::table('users')->where('type', 'LIKE', '%' . "user" . '%')->latest()->first();

        $all_theme_fetch = DB::table('theme_uploads')->latest()->first();
        $find_id_theme = DB::table('theme_uploads')->select('user_name')->latest()->first();
        $find_id_theme_user = DB::table('users')->where('id', 'LIKE', '%' . $find_id_theme->user_name . '%')->get();

        $theme_queues_count = DB::table('theme_queues')->count();
        
        $category = DB::table('create_categories')->latest()->first();
        $find_id_category = DB::table('create_categories')->select('usr_id')->latest()->first();
        $find_id_category_user = DB::table('users')->where('id', 'LIKE', '%' . $find_id_category->usr_id . '%')->get();


        return view('/pages/dashboard-analytics', [
            'pageConfigs' => $pageConfigs, 
            'ad_id_find' => $ad_id_find, 
            'ad_category_id' => $ad_category_id, 
            'user_downloads' => $user_downloads, 
            'all_theme' => $all_theme, 
            'all_categories' => $all_categories, 
            'all_downloads' => $all_downloads, 
            'all_users_id' => $all_users_id, 
            'all_users' => $all_users, 
            'id_loop' => $id_loop, 
            'category' => $category, 
            'find_id_category_user' => $find_id_category_user, 
            'all_theme_fetch' => $all_theme_fetch, 
            'find_id_theme_user' => $find_id_theme_user,
            'theme_queues_count' => $theme_queues_count,
            'queue_id_find' => $queue_id_find  
        ]);
    }
}

