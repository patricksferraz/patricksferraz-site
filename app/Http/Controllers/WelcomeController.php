<?php

namespace patricksferraz\Http\Controllers;

use patricksferraz\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WelcomeController extends Controller
{

    function home()
    {
        return view('welcome');
    }

    function contact()
    {
        return view('contact');
    }

    function postContact(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required|between:3,50',
            'telefone' => 'required',
            'email' => 'required|email',
            'assunto' => 'required|max:100',
            'mensagem' => 'required|max:1000'
        ]);

        Mail::queue(new Contact(
            $request->nome,
            $request->telefone,
            $request->email,
            $request->assunto,
            $request->mensagem
        ));

        $messages = [
            'messages' => ["Mensagem enviada com sucesso"]
        ];
        $messagebag = new \Illuminate\Support\MessageBag($messages);

        return back()->withErrors($messagebag);
    }
}
