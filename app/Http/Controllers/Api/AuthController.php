<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Api\AuthApiRequest as ApiAuthApiRequest;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Http\JsonResponse;

class AuthController extends BaseController
{

    public function login(ApiAuthApiRequest $request): JsonResponse
    {

        $credentials = $request->only(['email', 'password']);

        if (auth()->attempt($credentials)) {
            $accessToken = auth()->user()->createToken('authToken')->accessToken;
            return $this->successResponse([
                'access_token' => $accessToken,
                'user' =>  auth()->user()
            ]);
        }

        return $this->failedResponse('Invalid Credentials!');
    }

    public function profile(Request $request): JsonResponse
    {
        if ($user = auth()->user()) {
            return $this->successResponse($user);
        }

        return $this->failedResponse();
    }

    public function logout(Request $request): JsonResponse
    {
        $user = auth()->user()->token();
        $user->revoke();

        return $this->successResponse([
            'message' => 'Logged out succesfully!',
        ]);
    }
}
