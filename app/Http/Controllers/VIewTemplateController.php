<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use File;
use Zip;
use App\ThemeUpload;
class ViewTemplateController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth');
    }
    public function search(Request $request)
    {
        $q = $request->input('q');
        if($q != '')
        {
            $theme = DB::table('theme_uploads')->where('id', 'LIKE', '%' . $q . '%')
                                               ->orWhere('theme_name', 'LIKE', '%' . $q . '%')
                                               ->orWhere('theme_category', 'LIKE', '%' . $q . '%')
                                               ->get();
            if(count($theme) > 0)
                return view('view_template')->withDetails ($theme)->withQuery ($q);
        }
        return back()->withMessage ('No Details Found. Try to search again');
    }
    public function page_view($id)
    {
      $main_view = DB::table('theme_uploads');
      $view_theme_back = ThemeUpload::findOrFail($id);
      return view('pages.template_preview')->with([
        'view_theme_back'  => $view_theme_back, 'main_view' => $main_view
      ]);
    }
    public function theme_demo($id)
    {

      $view_theme_demo = ThemeUpload::findOrFail($id);
      return File::get(public_path() . '\files/'. $view_theme_demo->theme_file . '/index.html');
      
      
    }
    public function download($id, Request $request){
      $theme_demo_n = ThemeUpload::findOrFail($id);

      $data = array('user_id' => Auth::user()->id, 'theme_name'=>$theme_demo_n->theme_name, 'theme_category'=>$theme_demo_n->theme_category, 'theme_price'=>$theme_demo_n->theme_price, 'theme_discription'=>$theme_demo_n->theme_discription, 'theme_img'=>$theme_demo_n->theme_image);
      DB::table('downloads')->insert($data);
      return response()->download(public_path("uploads/$theme_demo_n->theme_file" . ".zip"));
    }
}
