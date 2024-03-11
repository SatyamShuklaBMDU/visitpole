<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function subscribe()
    {
        return view('admin.dashboard.Subscriber.subscribe');
    }
    public function storesubscribe(Request $request){
        // dd($request->all());
    }
}
