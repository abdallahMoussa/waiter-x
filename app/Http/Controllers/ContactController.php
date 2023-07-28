<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyCustomEmail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'content' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'phone' => $request->phone,
            'content' => $request->content,
        ];

        Mail::to('waiter.x.services@gmail.com')->send(new MyCustomEmail($data));

        return redirect()->back()->with('success', ' شكرا لرسالتك, سيقوم أحد ممثلى خدمه العملاء بالتواصل معك فى اقرب وقت ممكن.')->with('scrollToForm', true);
    }
}
