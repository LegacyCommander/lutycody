<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Регистрация нового пользователя.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        $user = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
        ]);

        $token = Auth::login($user);

        return response()->json([
            'message' => 'Пользователь успешно зарегистрирован',
            'user' => $user,
            'token' => $token
        ], 201);
    }

    /**
     * Вход пользователя и получение JWT-токена.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (! $token = Auth::attempt($credentials)) {
            return response()->json(['error' => 'Неверные учетные данные'], 401);
        }

        return response()->json([
            'message' => 'Успешный вход',
            'token' => $token,
            'user' => Auth::user()
        ]);
    }

    /**
     * Получение информации о текущем аутентифицированном пользователе.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAuthenticatedUser()
    {
        $user = Auth::user();

        return response()->json($user);
    }
}
