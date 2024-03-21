<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\BusinessPost;

class DasboardController extends Controller
{
    public function dashboard()
    {
        $bussCount=DB::table('business_posts')->count();
        $subCount=DB::table('subscriptions')->count();
        $catCount=DB::table('categories')->count();
        $mediaCount=DB::table('media_images')->count();
        //  dd($catCount);
        return view('admin.dashboard',compact('bussCount','subCount','catCount','mediaCount'));
    }
}
