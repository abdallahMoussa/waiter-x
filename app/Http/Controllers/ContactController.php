<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyCustomEmail;
use App\Models\User;
use Closure;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function sendEmail(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'content' => 'required',

        ]);
        $user = User::where('email', '=', $request->email)->first();

        if ($user && now()->diffInHours($user->updated_at) < 24) {
            return redirect()->back()->with('fail', ' لقد قمت بمراسلتنا بالفعل وسيقوم أحد ممثلى الخدمة بالرد عليك خلال 24 ساعه.')->with('scrollToForm', true);
        }

        if (!$user) {
            User::create($fields);
        } else {
            $user->update(['updated_at' => now()]);
        }

        $data = [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'content' => $request->content,
        ];

        Mail::to('waiter.x.services@gmail.com')->send(new MyCustomEmail($data));

        return redirect()->back()->with('success', ' شكرا لرسالتك, سيقوم أحد ممثلى خدمه العملاء بالتواصل معك فى اقرب وقت ممكن.')->with('scrollToForm', true);
    }
    public function subscribe(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        $user = User::where('email', '=', $request->email)->first();

        if ($user && now()->diffInHours($user->updated_at) < 24 && $user->subscribed) {
            return redirect()->back()->with('failSub', ' لقد قمت بطلب الاشتراك بالفعل وسيقوم أحد ممثلى الخدمة بالتواصل معك خلال 24 ساعه.')->with('scrollToFormSub', true);
        }
        if (!$user) {
            $fields['subscribed'] = 1;
            User::create($fields);
        } else {
            // $user->update(['subscribed' => 1,'updated_at' => now()]);
            $user->updated_at = now();
            $user->subscribed = 1;
            $user->save();
        }


        $data = [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'content' => $request->content,
        ];

        Mail::to('waiter.x.services@gmail.com')->send(new MyCustomEmail($data));

        return redirect()->back()->with('successSub', ' شكرا لاشتراكك, سيقوم أحد ممثلى الخدمة بالتواصل معك فى اقرب وقت ممكن.')->with('scrollToFormSub', true);
    }
}
