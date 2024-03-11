<?php

namespace App\Http\Controllers;

use App\Mail\SubscriptionMail;
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
        // $users['to'] = $request->semail;
        // $data = [
        //     'name' => $request->sname,
        //     'email' => $request->semail
        // ]
        //     Mail::send('emails.subscription', function ($message) use ($users) {
        //     $message->from('contact@digitalutilization.com', 'contact@digitalutilization.com');
        //     $message->to($users['to']);
        //     $message->subject('Thanks for Subscription.');
        // });
        $data = [
            'sname' => $request->input('sname'),
            'email' => $request->input('semail'),
        ];
        // Mail::to("data['email']")->send(new SubscriptionMail($data));
        // dd($data);
        
        Mail::to($data['email'])->send(new SubscriptionMail($data));
        return redirect()->back()->with('message','Thanks for Subscription!');
    }
        // return back()->with('message','Thanks for Subscription!');
    }
