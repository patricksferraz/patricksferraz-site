<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    function home() {
        return view('welcome');
    }

    function contact() {
        return view('contact');
    }
}
