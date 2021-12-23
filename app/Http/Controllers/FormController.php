<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function getContactForm(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'text' => $request->text
        ];

        Mail::send('mail', $data, function($message) {
            $user = User::all()->first();

            $message->to($user->email)->subject
                ('Got new message');
            $message->from(env('MAIL_FROM_ADDRESS'));
        });

        try {
           Message::create([
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'text' => $request->text
           ]);
           return response('OK', 200);
        } catch (Exception $e) {
            return response('Something wrong', 200);
        } 
    }
}
