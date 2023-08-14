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
            'email' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'content' => $request->content,
        ];

        Mail::to('waiter.x.services@gmail.com')->send(new MyCustomEmail($data));
        if ($data['content']) {
            return redirect()->back()->with('success', ' شكرا لرسالتك, سيقوم أحد ممثلى خدمه العملاء بالتواصل معك فى اقرب وقت ممكن.')->with('scrollToForm', true);
        } else {
            return redirect()->back()->with('successSub', ' شكرا لرسالتك, سيقوم أحد ممثلى خدمه العملاء بالتواصل معك فى اقرب وقت ممكن.')->with('scrollToForm', true);
        }
    }
    public function subscribe(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'content' => $request->content,
        ];

        Mail::to('waiter.x.services@gmail.com')->send(new MyCustomEmail($data));

        return redirect()->back()->with('successSub', ' شكرا لاشتراكك, سيقوم أحد ممثلى خدمه العملاء بالتواصل معك فى اقرب وقت ممكن.')->with('scrollToFormSub', true);
    }
}
