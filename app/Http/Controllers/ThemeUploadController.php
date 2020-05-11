<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Zip;
use Carbon\Carbon;
use App\ThemeUpload;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class ThemeUploadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	//category list query
		$view_category_drop = DB::table('create_categories');
		$view_category_drop = $view_category_drop->get();
		return view('pages.themeupload')->with(['view_category_drop'  => $view_category_drop]);
        //end category list query
    }
    public function store(Request $request)
    {
        //variables
        $view_category_drop = DB::table('create_categories');
        $view_category_drop = $view_category_drop->get();
        $theme_name = $request->input('theme_name');
        $theme_category = $request->input('category_select');
        $theme_price = $request->input('theme_price');
        $theme_discription = $request->input('theme_description');
        $auth_name = $request->input('user_name');
        $theme_image = $request->file('image_upload');
        $theme_file = $request->file('file_upload');
        //end variables

        //file upload query
        // $request->file('image-upload')->store('upload');
        // $request->file('file-upload')->store('upload');
        //end file upload query
        $request->validate([
            'image_upload' => 'required|mimes:pdf,xlx,csv,png,jpg,jpeg',
            'file_upload' => 'required|mimes:zip,pdf,xlx,csv,png,jpg,jpeg',
            'theme_description' => 'required',
        ]);
        $fileName = time().'.'.$request->file_upload->extension();  
        $path1 = $request->image_upload->getClientOriginalName();
        $path2 = $request->file_upload->getClientOriginalName();
        // $path2 = "temp";
        $request->image_upload->move(public_path('uploads/theme_image'), $path1);
        $request->file_upload->move(public_path('uploads/theme_file'), $path2);
        
        $imagePath = $path2;
        $ext = pathinfo($imagePath, PATHINFO_EXTENSION);
        $file = basename($imagePath,".".$ext);
       

        //insert query
        $data = array('user_name' => $auth_name, 'theme_name'=>$theme_name, 'theme_category'=>$theme_category, 'theme_price'=>$theme_price, 'theme_discription'=>$theme_discription, 'theme_image'=>$path1, 'theme_file'=>$file);
        
        Zip::create("uploads/$path2")->extract('files/');
        
        // dd($data);die();
        DB::table('theme_queues')->insert($data);
        
        //theme success alert
        if ($data) {
            # code...
            echo "<script>alert('Theme uploaded successfully');</script>";
             
        }
        else
        {
            echo "<script>alert('Theme not uploaded');</script>";
        }
        //end theme success alert

        //back to page query
    	return back()
            ->with('success','You have successfully upload file. Your theme will be live in 24 to 36 hours. The authors are checking your theme.')
            ->with('file',$fileName)
            ->with(['view_category_drop'  => $view_category_drop]);
        //end back to page query
	}
    public function view()
    {
        $view_theme_drop = DB::table('theme_uploads')->paginate(5);
        $id_loop = '1';
        return view('pages/view_themes')->with(['view_theme_drop'  => $view_theme_drop, 'id_loop' => $id_loop]);
    }
    public function mainview()
    {
        $main_view = DB::table('theme_uploads')->paginate(5);
        $main_view_d = DB::table('theme_uploads');
        return view('templates')->with(['main_view'  => $main_view]);
    }
    public function delete(Request $request, $id)
    {       
        $theme_delete = ThemeUpload::findOrFail($id);
        $theme_delete->delete();
        return back()
                ->with("Success", "You have successfully Deleted the Category.");
    }
    public function edit_page($id)
    {
        $view_category_drop = DB::table('create_categories');
        $view_category_drop = $view_category_drop->get();
        $view_theme_back = ThemeUpload::findOrFail($id);
        return view('pages.edit_theme')->with([
        'view_theme_back'  => $view_theme_back, 'view_category_drop' => $view_category_drop
      ]);
    }
    public function edit(Request $request, $id)
    {
        $request->validate([
            'edited_theme_name' => ['string', 'max:255'],
            'edited_category_select' => ['string', 'max:255'],
            'edited_theme_price' => ['string', 'max:255'],
            'edited_theme_description' => ['string', 'max:500'],
            'edited_image_upload' => ['mimes:pdf,xlx,csv,png,jpg,jpeg'],
            'edited_file_upload' => ['mimes:zip,pdf,xlx,csv,png,jpg,jpeg'],
        ]);
        if(request()->has('edited_image_upload'))
        {
            $path1 = $request->edited_image_upload->getClientOriginalName();
            $request->edited_image_upload->move(public_path('uploads'), $path1);
            $category_edit = ThemeUpload::findOrFail($id);
            $category_edit->theme_name = $request->input('edited_theme_name');
            $category_edit->theme_category = $request->input('edited_category_select');
            $category_edit->theme_price = $request->input('edited_theme_price');
            $category_edit->theme_discription = $request->input('edited_theme_description');
            $category_edit->theme_image = $path1;
            $category_edit->save($request->all());
        }
        if(request()->has('edited_file_upload'))
        {
            $path2 = $request->edited_file_upload->getClientOriginalName();
            $request->edited_file_upload->move(public_path('uploads'), $path2);
            $category_edit = ThemeUpload::findOrFail($id);
            $category_edit->theme_name = $request->input('edited_theme_name');
            $category_edit->theme_category = $request->input('edited_category_select');
            $category_edit->theme_price = $request->input('edited_theme_price');
            $category_edit->theme_discription = $request->input('edited_theme_description');
            $category_edit->theme_file = $path2;
            $category_edit->save($request->all());
        }
        
        $category_edit = ThemeUpload::findOrFail($id);
        $category_edit->theme_name = $request->input('edited_theme_name');
        $category_edit->theme_category = $request->input('edited_category_select');
        $category_edit->theme_price = $request->input('edited_theme_price');
        $category_edit->theme_discription = $request->input('edited_theme_description');
        

        $category_edit->save($request->all());
        return back()
                ->with("Success", "You have successfully Deleted the Category.");
    }
}
