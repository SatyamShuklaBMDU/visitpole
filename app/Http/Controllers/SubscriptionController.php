<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class SubscriptionController extends Controller
{
    public function storeSubscriber(Request $request){
        // dd($request->all());
        $validatedData = $request->validate([
            'sname' => 'required|string',
            'semail' => 'required|email',
        ]);
        DB::select('CALL sp_create_subscription(?, ?)', [
            $validatedData['sname'],
            $validatedData['semail']
        ]);
        $users['to'] = $request->semail;
        $data = [
            '' => ''
        ]
        Mail::send('email.subscriptionmail', function ($message) use ($users) {
            $message->from('contact@digitalutilization.com', 'contact@digitalutilization.com');
            $message->to($users['to']);
            $message->subject('Thanks for Subscription.');
        });
        return back()->with('message','Thanks for Subscription!');
    }
}
