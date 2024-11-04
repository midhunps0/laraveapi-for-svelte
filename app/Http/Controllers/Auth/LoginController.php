<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    function Login(Request $request)
    {
        $request->session()->flush();
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'success' => false,
                'message' => 'Wrong email or password! Please try again'
            ], 401);
        }

        // $request->session()->regenerate();

        /**
         * @var App\Models\User
         */
        $user = Auth::user();
        // $permissions = $user->permissions();
        // $client_id=$user->client_id;
         // Generate a new token
        $token = $user->createToken('access_token')->plainTextToken;
        $response = [
            'success' => true,
            'access_token' => $token,
            'user' => $user,
            'message' => 'Login successful!'
        ];
        return response()->json($response);
    }

}


