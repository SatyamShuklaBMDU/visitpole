<?php

namespace App\Http\Controllers;

use App\Models\BusinessPost;
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
        return view('about');
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
        return view('contact');
    }

    public function finance()
    {
        
        return view('finances');
    }

    public function news()
    {
        return view('news');
    }

    public function business()
    {
        $category=DB::select('CALL sp_get_categories()');
        $businesses = BusinessPost::all();
        //  dd($businesses);
        return view('business',compact('category','businesses'));
        // return view('business');
    }

    public function fashion()
    {
        return view('fashion');
    }

    public function economy(){

        return view('economy');
    }
    

}
