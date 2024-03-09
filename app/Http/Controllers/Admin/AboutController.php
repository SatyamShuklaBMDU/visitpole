<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $about = About::all();
        // dd($about);
        return view('admin.dashboard.about.all_about',compact('about'));
    }
    public function create()
    {
        return view('admin.dashboard.about.create_about');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:15|max:200',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // adjust file types and size as needed
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $validatedData['image'] = $imageName;
        }
        About::create($validatedData);
        return redirect()->back()->with('success', 'About information has been saved successfully.');
    }
}
    
