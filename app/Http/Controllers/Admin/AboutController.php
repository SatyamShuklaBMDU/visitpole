<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function create()
    {
        return view('admin.dashboard.about.create_about');
    }
}
