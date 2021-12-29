<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AppController extends Controller
{
    public function sendMail(Request $request)
    {
        Mail::to($request->email)->send(new SendMail($request->all()));

        return redirect()->route('welcome')->with('success', 'Your message has been sent successfully');
    }
}
