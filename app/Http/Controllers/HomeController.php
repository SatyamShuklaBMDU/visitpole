<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
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
        return view('business');
    }

    public function fashion()
    {
        return view('fashion');
    }

    public function economy(){

        return view('economy');
    }
    

}
