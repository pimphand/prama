<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $token = $user->createToken('user_token')->accessToken;

        return response()->json([
            'token' => $token
        ], 200);
    }

    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (auth()->attempt($credentials)) {
            $token = auth()->user()->createToken('user_token')->accessToken;
            return response()->json(['token' => $token], 200);
        } else {
            return response()->json(['error' => 'UnAuthorized'], 401);
        }
    }

    public function logout()
    {
        $token = Auth::user()->tokens;
        foreach ($token as $key => $value) {
            $value->delete();
        }
        return response()->json([
            'response' => 'Successfully logged out',
        ], 200);
    }
}
