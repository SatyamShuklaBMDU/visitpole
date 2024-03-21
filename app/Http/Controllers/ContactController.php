<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Models\BusinessPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact()
    {
        $businesses = BusinessPost::latest()->take(4)->get();
        $category = DB::select('CALL sp_get_categories()');
        // dd($category);
        return view('contact', compact('category', 'businesses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255|min:10',
            'message' => 'required|string|max:150|min:10',
        ]);
        // Mail::to('ermanish1090@gmail.com')->send(new ContactFormMail($request->all()));
        $formdata = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ];
        Mail::to('ermanish1090@gmail.com')->send(new ContactFormMail($formdata));
        return redirect()->back()->with('success', 'Message sent successfully!');
    }
    }
