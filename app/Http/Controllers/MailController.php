<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\Mailtrap;

class MailController extends Controller
{
    public function form()
    {
        return view('contato');
    }

    public function send(Request $request)
    {
        Mail::to('giovanizapa7@gmail.com')->send(new Mailtrap($request->mensagem, $request->email));
        return redirect()->action('HomeController@index');
    }
}
