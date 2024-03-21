<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use NunoMaduro\Collision\Adapters\Phpunit\Subscribers\Subscriber;

class SubscriberController extends Controller
{
    public function subscribe()
    {
        $subscribe = Subscription::all();
        //  dd($subscribe);
        return view('admin.dashboard.Subscriber.subscribe',compact('subscribe'));
    }
    public function storesubscribe(Request $request){
        // dd($request->all());
    }
}
