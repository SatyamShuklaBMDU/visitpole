<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category(){
        return view('admin.dashboard.category.showCategory');
    }
    public function addcategory(){
        return view('admin.dashboard.category.addCategory');
    }
    public function postcategory(){
        return view('admin.dashboard.category.addCategoryPost');
    }
}
