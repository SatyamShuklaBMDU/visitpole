<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BusinessPostController extends Controller
{
    public function addpostbusiness(){
        $category = DB::select('CALL sp_get_categories()');
        return view('admin.dashboard.category.business.addpostbusiness',compact('category'));
    }
    public function addpostcarrer(){
        return view('admin.dashboard.category.business.addpostcarrer');
    }
    public function addpostsport(){
        return view('admin.dashboard.category.business.addpostcarrer');
    }
    public function addposthealth(){
        return view('admin.dashboard.category.business.addpostcarrer');
    }
    public function addposteconomy(){
        return view('admin.dashboard.category.business.addpostcarrer');
    }
    public function showbusinesspost(){
        $posts = DB::select('CALL sp_get_all_business_post()');
        return view('admin.dashboard.post.businesspost',compact('posts'));
    }
    public function addpostlife(){
        return view('admin.dashboard.category.business.addpostcarrer');
    }
    public function storeBusinessPost(Request $request)
    {
        $validatedData = $request->validate([
            'heading' => 'required|string',
            'category_id' => 'required|integer',
            'short_content' => 'required|string',
            'editor1' => 'required|string',
            'author_name' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'date' => 'required|date',
            'status' => 'required|boolean',
            'meta_title' => 'required|string',
            'meta_desc' => 'required|string',
            'meta_key' => 'required|string',
        ]);
        $slugURL = Str::slug($validatedData['slug_url']);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('business_post'), $fileName);
            $validatedData['image'] = 'business_post/' . $fileName;
        }
        if ($request->hasFile('image1')) {
            $file = $request->file('image1');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('business_post'), $fileName);
            $validatedData['image1'] = 'business_post/' . $fileName;
        }
        DB::select('CALL sp_insert_business_post(?,?,?,?,?,?,?,?,?,?,?,?,?)', [
            $validatedData['heading'],
            $validatedData['category_id'],
            $validatedData['short_content'],
            $validatedData['editor1'],
            $validatedData['author_name'],
            $validatedData['image'],
            $validatedData['image1'],
            $validatedData['date'],
            $validatedData['status'],
            $slugURL,
            $validatedData['meta_title'],
            $validatedData['meta_desc'],
            $validatedData['meta_key']
        ]);

        return redirect()->route('business.post')->with('success', 'Post created successfully');
    }
    public function updateBusinessPost(Request $request, $id)
    {
        $validatedData = $request->validate([
            'heading' => 'required|string',
            'category_id' => 'required|integer',
            'short_content' => 'required|string',
            'editor1' => 'required|string',
            'author_name' => 'required|string',
            'image' => 'required|string',
            'image1' => 'required|string',
            'date' => 'required|date',
            'status' => 'required|boolean',
            'meta_title' => 'required|string',
            'meta_desc' => 'required|string',
            'meta_key' => 'required|string',
        ]);

        $slugURL = Str::slug($validatedData['slug_url']);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('business_post'), $fileName);
            $validatedData['image'] = 'business_post/' . $fileName;
        }
        if ($request->hasFile('image1')) {
            $file = $request->file('image1');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('business_post'), $fileName);
            $validatedData['image1'] = 'business_post/' . $fileName;
        }
        DB::select('CALL sp_update_business_post(?,?,?,?,?,?,?,?,?,?,?,?,?,?)', [
            $id,
            $validatedData['heading'],
            $validatedData['category_id'],
            $validatedData['short_content'],
            $validatedData['editor1'],
            $validatedData['author_name'],
            $validatedData['image'],
            $validatedData['image1'],
            $validatedData['date'],
            $validatedData['status'],
            $slugURL,
            $validatedData['meta_title'],
            $validatedData['meta_desc'],
            $validatedData['meta_key']
        ]);

        return redirect()->route('business.post')->with('success', 'Post updated successfully');
    }
    public function editBusinessPost($id)
    {
        $category = DB::select('CALL sp_get_categories()');
        $post = DB::select('CALL sp_get_specific_business_posts(?)', array($id));
        return view('admin.dashboard.category.business.editpostbusiness', compact('post','category'));
    }
    public function destroyBusinessPost($id)
    {
        DB::select('CALL sp_delete_business_post(?)', array($id));
        return back()->with('success', 'Post deleted successfully');
    }
}
