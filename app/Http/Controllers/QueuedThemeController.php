<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\theme_queues;
class QueuedThemeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
    	$view_theme_drop = DB::table('theme_queues')->paginate(5);
        $id_loop = '1';
    	return view('pages.queued_theme')->with(['view_theme_drop'  => $view_theme_drop, 'id_loop' => $id_loop]);
    }
    public function delete(Request $request, $id)
    {     
        $theme_delete = theme_queues::findOrFail($id);
        $theme_delete->delete();
        return back()
                ->with("Success", "You have successfully Deleted the Theme.");
    }
    public function theme_confirm(Request $request, $id)
    {
        $theme_name = $request->input('hidden_theme_name');
        $theme_category = $request->input('hidden_theme_category');
        $theme_price = $request->input('hidden_theme_price');
        $theme_discription = $request->input('hidden_theme_description');
        $auth_name = $request->input('hidden_theme_publisher');
        $theme_image = $request->input('hidden_theme_image');
        $theme_file = $request->input('hidden_theme_file');

        //insert query
        $data = array('user_name' => $auth_name, 'theme_name'=>$theme_name, 'theme_category'=>$theme_category, 'theme_price'=>$theme_price, 'theme_discription'=>$theme_discription, 'theme_image'=>$theme_image, 'theme_file'=>$theme_file);
        
        // dd($data);die();
        DB::table('theme_uploads')->insert($data);
        
        $theme_delete = theme_queues::findOrFail($id);
        $theme_delete->delete();
        //back to page query
        return back()
            ->with('success','Theme was perfect');
        //end back to page query
    }
}
