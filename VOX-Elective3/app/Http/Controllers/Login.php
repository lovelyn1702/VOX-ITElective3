<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    function index() {
        // return this view
        return view('login');
    }
}
