<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = [
            'email' => $request->email,
            'msg' => $request->msg
        ];

        Mail::send('contactemail', $data, function ($message) use ($data) {
            $message->to('mahalerang@gmail.com') 
                    ->subject('New Contact Form Message')
                    ->from($data['email']);
        });

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
