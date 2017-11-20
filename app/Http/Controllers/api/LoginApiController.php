<?php

namespace ViasLibres\Http\Controllers\api;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use ViasLibres\Http\Controllers\Controller;
use ViasLibres\User;

class LoginApiController extends Controller
{

    public function getToken()
    {
        $session_id = session()->getId();
        return response()->json(['status' => $session_id], 200);
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        $request->session()->regenerate();
        return response()->json(['status' => 'ok'], 200);
    }

    public function  login(Request $request) {
        $user = User::where('email', '=', $request->email)->first();
        if ($user === null) {
            return response()->json(['status' => 'error'], 422);
        } else {
            return response()->json(['status' => 'ok', 'data' => $user], 200);
        }
    }
}