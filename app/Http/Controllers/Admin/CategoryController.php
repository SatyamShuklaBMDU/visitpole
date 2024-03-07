<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function category()
    {
        $categories = DB::select('CALL sp_get_categories()');
        return view('admin.dashboard.category.showCategory',compact('categories'));
    }
    public function addcategory()
    {
        return view('admin.dashboard.category.addCategory');
    }
    public function postcategory()
    {
        return view('admin.dashboard.category.addCategoryPost');
    }
    public function store(Request $request)
    {
        $cat_name = $request->input('cat_name');
        $slug_url = $request->input('slug_url');
        $cat_meta_title = $request->input('cat_meta_title');
        $cat_meta_desc = $request->input('cat_meta_desc');
        $cat_meta_key = $request->input('cat_meta_key');
        $display = $request->input('display');
        DB::select('CALL sp_insert_category(?, ?, ?, ?, ?, ?)', array($cat_name, $slug_url, $cat_meta_title, $cat_meta_desc, $cat_meta_key, $display));
        return redirect()->route('category.show')->with('success', 'Category created successfully');
    }

    public function edit($id)
    {
        $category = DB::select('CALL sp_get_category(?)', array($id));
        return view('admin.dashboard.category.editCategory', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $cat_name = $request->input('cat_name');
        $slug_url = $request->input('slug_url');
        $cat_meta_title = $request->input('cat_meta_title');
        $cat_meta_desc = $request->input('cat_meta_desc');
        $cat_meta_key = $request->input('cat_meta_key');
        $display = $request->input('display');
        DB::select('CALL sp_update_category(?, ?, ?, ?, ?, ?, ?)', array($id, $cat_name, $slug_url, $cat_meta_title, $cat_meta_desc, $cat_meta_key, $display));
        return redirect()->route('category.show')->with('success', 'Category updated successfully');
    }

    public function destroy($id)
    {
        DB::select('CALL sp_delete_category(?)', array($id));
        return back()->with('success', 'Category deleted successfully');
    }
}
