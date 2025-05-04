<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function __invoke(Request $request)
    {
        return view('auth.login');
    }
}
