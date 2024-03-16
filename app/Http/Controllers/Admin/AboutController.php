<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $validatedData['image'] = $imageName;
        }
        About::create($validatedData);
        return redirect()->back()->with('success', 'About information has been saved successfully.');
    }
    public function edit($id){
        $about = About::findOrFail($id);
        return view('admin.dashboard.about.edit_about', compact('about'));
    }
public function update(Request $request, About $about)
{
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string'       
    ]);

    $about->title = $validatedData['title'];
    $about->description = $validatedData['description'];
    if ($request->hasFile('image')) {
        if ($about->image) {
            Storage::delete('public/images/' . $about->image);
        }
        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('images'), $imageName);
        $about->image = $imageName;
    }

    $about->save();

    return redirect()->back()->with('success', 'About information updated successfully!');
}

}
