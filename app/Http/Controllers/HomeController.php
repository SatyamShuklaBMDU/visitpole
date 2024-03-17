<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\BusinessPost;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $category = DB::select('CALL sp_get_categories()');
        $businesses = BusinessPost::latest()->take(4)->get();
        $home = BusinessPost::latest()->take(10)->get();
        return view('index', compact('category', 'businesses','home'));
    }

    public function about()
    {   $businesses = BusinessPost::latest()->take(4)->get();
        $category = DB::select('CALL sp_get_categories()');
        $abouts = About::all();
        return view('about', compact('abouts', 'category','businesses'));
    }

    public function advertise()
    {
        return view('advertise');
    }

    public function media()
    {
        return view('media');
    }

    public function corporate_infomation()
    {
        return view('corporate_infomation');
    }

    public function compliance()
    {
        return view('compliance');
    }

    public function apps_products()
    {
        return view('apps_products');
    }

    // public function contact()
    // {
    //     $category = DB::select('CALL sp_get_categories()');
    //     // dd($category);
    //     return view('contact', compact('category'));
    // }

    public function finance()
    {

        return view('finances');
    }

    public function news()
    {
        $category = DB::select('CALL sp_get_categories()');
        $businesses = BusinessPost::latest()->take(4)->get();
        return view('ui_layouts.news', compact('category', 'businesses'));
    }

    public function business($slug_url)
    {
        // dd($slug_url);
        // $bus = BusinessPost::where('slug_url', $slug_url)->firstOrFail();
        $cate = Category::where('slug_url', $slug_url)->firstOrFail();
        $category = DB::select('CALL sp_get_categories()');
        $businesses = BusinessPost::latest()->take(4)->get();
        return view('business', compact('category', 'businesses', 'cate'));
    }

    public function fashion()
    {
        return view('fashion');
    }

    public function economy()
    {
        return view('economy');
    }

    public function show($slug_url)
    {
        $bus = BusinessPost::where('slug_url', $slug_url)->firstOrFail();
        $category = DB::select('CALL sp_get_categories()');
        $businesses = BusinessPost::latest()->take(4)->get();
        return view('show', compact('category', 'businesses', 'bus'));
    }
}
