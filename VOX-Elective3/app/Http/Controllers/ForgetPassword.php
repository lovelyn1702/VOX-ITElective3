<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgetPassword extends Controller
{
    function index() {
        // return this view
        return view('forgetpassword');
    }
}
