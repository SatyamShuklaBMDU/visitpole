<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function showMedia()
    {
        return view('admin.dashboard.media.showmedia');
    }
    public function addimage()
    {
        return view('admin.dashboard.media.addimage');
    }
}
