<?php

namespace App\Http\Controllers;

use App\Traits\HttpResponses;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    use HttpResponses;

    public function login()
    {
        return 'this is a login method';
    }
    public function register()
    {
        return response()->json('this is a register method');
    }

    public function logout()
    {
        return response()->json('this is a logout method');
    }

}
