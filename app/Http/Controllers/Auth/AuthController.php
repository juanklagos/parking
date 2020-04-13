<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Carbon\Carbon;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        $credentials = request(['email', 'password']);
        if (!Auth::attempt($credentials)){
            return response([
                'status' => 'error',
                'error' => 'invalid.credentials',
                'msg' => 'Invalid Credentials.'
            ], 400);
        }

        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;

        if ($request->remember_me){
            $token->expires_at = Carbon::now()->addWeeks(1);
            $token->save();
        }


        return response([
            'status' => 'success',
            'token' => $tokenResult->accessToken
        ])->header('Content-Type', 'text/plain')
            ->header('Authorization', $tokenResult->accessToken);

    }

    public function user(Request $request)
    {
        return response()->json(['data' => $request->user()]);
    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'logout complete'
        ]);
    }
}
