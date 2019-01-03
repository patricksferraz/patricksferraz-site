<?php

namespace patricksferraz\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    function home() {
        return view('welcome');
    }

    function contact() {
        return view('contact');
    }

    function postContact(Request $request) {
        $this->validate($request, [
            'nome' => 'required|between:3,50',
            'telefone' => 'required',
            'email' => 'required|email',
            'assunto' => 'required|max:100',
            'mensagem' => 'required|max:1000'
        ]);

        var_dump($request->all());
    }
}
