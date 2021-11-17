<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Exception;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function getContactForm(Request $request)
    {
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
