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
        $category=DB::select('CALL sp_get_categories()');
        $businesses = BusinessPost::all();
        //  dd($businesses);
        return view('index',compact('category','businesses'));
    }

    public function about()
    {
        $category=DB::select('CALL sp_get_categories()');
        $abouts=About::all();
        // dd($abouts);
        return view('about',compact('abouts','category'));
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

    public function contact()
    {
        $category=DB::select('CALL sp_get_categories()');
        // dd($category);
        return view('contact',compact('category'));
    }

    public function finance()
    {
        
        return view('finances');
    }

    public function news()
    {
        $category=DB::select('CALL sp_get_categories()');
        $businesses = BusinessPost::all();
        //  dd($businesses);
        return view('ui_layouts.news',compact('category','businesses'));
        // return view('news');
    }

    public function business($id)
    {
        // dd($id);
        
        $cate = Category::findOrFail($id);
        // dd($category);
        $category=DB::select('CALL sp_get_categories()');
        $businesses = BusinessPost::all();
        return view('business',compact('category','businesses','cate'));
    }

    public function fashion()
    {
        return view('fashion');
    }

    public function economy(){

        return view('economy');
    }

    public function show()
    {
        // $cate = Category::findOrFail($id);
        // dd($category);
        $category=DB::select('CALL sp_get_categories()');
        $businesses = BusinessPost::all();
        return view('show',compact('category','businesses'));
    }

}
