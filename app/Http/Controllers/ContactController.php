<?php

namespace App\Http\Controllers;

use App\Mail\ContactSender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request){
        Mail::to('alex@bloobs.com')->send(new ContactSender($request));
        return redirect()->back();
    }
}
