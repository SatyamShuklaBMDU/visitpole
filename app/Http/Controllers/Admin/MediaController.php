<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MediaController extends Controller
{
    public function showMedia()
    {
        $medias = DB::select('CALL sp_read_media_image()');
        return view('admin.dashboard.media.showmedia',compact('medias'));
    }
    public function addimage()
    {
        return view('admin.dashboard.media.addimage');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|boolean',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('media_images'), $fileName);
            $validatedData['image'] = 'media_images/' . $fileName;
        }
        DB::select('CALL sp_create_media_image(?,?,?)', [
            $validatedData['name'],
            $validatedData['image'],
            $validatedData['status'],
        ]);

        return redirect()->back()->with('success', 'Media image created successfully');
    }

    public function edit($id)
    {
        $decryptid = decrypt($id);
        $mediaImage = DB::select('CALL sp_get_specific_media_image(?)', [$decryptid]);
        return view('admin.dashboard.media.editimage', compact('mediaImage'));
    }

    public function update(Request $request, $id)
    {
        $decryptid = decrypt($id);
        $validatedData = $request->validate([
            'name' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|boolean',
        ]);
        $media = DB::select('CALL sp_get_specific_media_image(?)',array($decryptid));
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('media_images'), $fileName);
            $validatedData['image'] = 'media_images/' . $fileName;
        }else{
            $validatedData['image'] = $media[0]->image;
        }
        DB::select('CALL sp_update_media_image(?,?,?,?)', [
            $decryptid,
            $validatedData['name'],
            $validatedData['image'],
            $validatedData['status'],
        ]);
        return redirect()->route('show.media')->with('success', 'Media image updated successfully');
    }

    public function destroy($id)
    {
        $decryptid = decrypt($id);
        DB::select('CALL sp_delete_media_image(?)', [$decryptid]);
        return redirect()->route('show.media')->with('success', 'Media image deleted successfully');
    }
}
