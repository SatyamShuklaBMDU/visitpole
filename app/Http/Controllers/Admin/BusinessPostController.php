<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BusinessPostController extends Controller
{
    public function addpostbusiness(){
        return view('admin.dashboard.category.business.addpostbusiness');
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
    public function addpostlife(){
        return view('admin.dashboard.category.business.addpostcarrer');
    }
}
