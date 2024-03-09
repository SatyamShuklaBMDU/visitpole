<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BusinessPostController extends Controller
{
    public function addpostbusiness()
    {
        $category = DB::select('CALL sp_get_categories()');
        return view('admin.dashboard.category.business.addpostbusiness', compact('category'));
    }
    public function addpostcarrer()
    {
        return view('admin.dashboard.category.business.addpostcarrer');
    }
    public function addpostsport()
    {
        return view('admin.dashboard.category.business.addpostcarrer');
    }
    public function addposthealth()
    {
        return view('admin.dashboard.category.business.addpostcarrer');
    }
    public function addposteconomy()
    {
        return view('admin.dashboard.category.business.addpostcarrer');
    }
    public function showbusinesspost()
    {
        $posts = DB::select('CALL sp_get_all_business_post()');
        return view('admin.dashboard.post.businesspost', compact('posts'));
    }
    public function addpostlife()
    {
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
            'slug_url' => 'required|string',
            'm_title' => 'required|string',
            'm_desc' => 'required|string',
            'm_key' => 'required|string',
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
            $validatedData['m_title'],
            $validatedData['m_desc'],
            $validatedData['m_key'],
        ]);

        return redirect()->route('business.post')->with('success', 'Post created successfully');
    }
    public function updateBusinessPost(Request $request, $id)
    {
        $decryptid = decrypt($id);
        $validatedData = $request->validate([
            'heading' => 'required|string',
            'category_id' => 'required|integer',
            'short_content' => 'required|string',
            'editor1' => 'required|string',
            'author_name' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'date' => 'required|date',
            'status' => 'required|boolean',
            'slug_url' => 'required|string',
            'm_title' => 'required|string',
            'm_desc' => 'required|string',
            'm_key' => 'required|string',
        ]);
        $slugURL = Str::slug($validatedData['slug_url']);
        $post = DB::select('CALL sp_get_specific_business_posts(?)', array($decryptid));
        $updateData = [
            'heading' => $validatedData['heading'],
            'category_id' => $validatedData['category_id'],
            'short_content' => $validatedData['short_content'],
            'editor1' => $validatedData['editor1'],
            'author_name' => $validatedData['author_name'],
            'date' => $validatedData['date'],
            'status' => $validatedData['status'],
            'slug_url' => $slugURL,
            'm_title' => $validatedData['m_title'],
            'm_desc' => $validatedData['m_desc'],
            'm_key' => $validatedData['m_key'],
        ];
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('business_post'), $fileName);
            $updateData['image'] = 'business_post/' . $fileName;
        }else{
            $updateData['image'] = $post[0]->image;
        }
        if ($request->hasFile('image1')) {
            $file = $request->file('image1');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('business_post'), $fileName);
            $updateData['image1'] = 'business_post/' . $fileName;
        }else{
            $updateData['image1'] = $post[0]->image1;
        }
        DB::select('CALL sp_update_business_post(?,?,?,?,?,?,?,?,?,?,?,?,?,?)', [
            $decryptid,
            $updateData['heading'],
            $updateData['category_id'],
            $updateData['short_content'],
            $updateData['editor1'],
            $updateData['author_name'],
            $updateData['image'],
            $updateData['image1'],
            $updateData['date'],
            $updateData['status'],
            $slugURL,
            $updateData['m_title'],
            $updateData['m_desc'],
            $updateData['m_key'],
        ]);
        return redirect()->route('business.show.post')->with('success', 'Post updated successfully');
    }

    public function editBusinessPost($id)
    {
        $decryptid = decrypt($id);
        $category = DB::select('CALL sp_get_categories()');
        $post = DB::select('CALL sp_get_specific_business_posts(?)', array($decryptid));
        return view('admin.dashboard.category.business.editpostbusiness', compact('post', 'category'));
    }
    public function destroyBusinessPost($id)
    {
        $decryptid = decrypt($id);
        DB::select('CALL sp_delete_business_post(?)', array($decryptid));
        return back()->with('success', 'Post deleted successfully');
    }
}
