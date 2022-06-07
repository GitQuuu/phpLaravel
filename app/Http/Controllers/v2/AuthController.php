<?php

namespace App\Http\Controllers\v2;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function store(Request $request)
    {
        return "V2 API store";
    }

    public function signin(Request $request)
    {
        return "V2 API Signin";
    }
}
