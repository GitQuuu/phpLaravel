<?php

namespace App\Http\Controllers\v1;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function store(Request $request)
    {
        return "V1 API Store";
    }

    public function signin(Request $request)
    {
        return "V1 API Signin";
    }
}
