<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthApiController extends Controller
{
    //
    public function login(LoginRequest $request)
    {
        $credentials = $request->only("email", "password");
        $token = auth('api')->attempt($credentials);

        if (!$token) {
            return response(['message' => 'Invalid credentials'], 401);
        }

        return response()->json([
            'access_token' => $token,
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }

    public function me()
    {
        $user = auth()->user();
        return response()->json($user);
    }

    public function logout()
    {
        auth()->logout(true);
        return response()->json(['message' => 'Successfully logged out'], 200);
    }

    public function refresh()
    {
        $newToken = auth()->refresh();

        return response()->json([
            'access_token' => $newToken,
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
