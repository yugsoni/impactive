<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\create_category;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class CreateCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	return view('pages/create_category');
    }
    public function store(Request $request)
    {
        $category = $request->input('category');
        $category_id = $request->input('user_id');
        $data = array('usr_id' => $category_id,'category'=>$category);
        DB::table('create_categories')->insert($data);
    	return view('pages/create_category');
	}
	public function view()
	{
		$id_loop = '1';
		$view_category = DB::table('create_categories')->paginate(10);
		return view('pages.view_category')->with([
        'view_category'  => $view_category, 'id_loop' => $id_loop
      ]);
	}
    public function delete(Request $request, $id)
    {       
        $category_delete = create_category::findOrFail($id);
        $category_delete->delete();
        return back()
                ->with("Success", "You have successfully Deleted the Category.");
    }
    public function edit_page($id)
    {
        $view_category = create_category::findOrFail($id);
        return view('pages.edit_category')->with([
        'view_category'  => $view_category
      ]);
    }
    public function edit(Request $request, $id)
    {
        $request->validate([
            'edited_category' => ['string', 'max:255'],
        ]);
        $category_edit = create_category::findOrFail($id);
        $category_edit->category = $request->input('edited_category');
        $category_edit->save($request->all());
        return back()
                ->with("Success", "You have successfully Deleted the Category.");
    }
}
