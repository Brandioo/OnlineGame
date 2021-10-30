<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;
use Laravel\Passport\HasApiTokens;

class AuthController extends Controller
{
    use HasApiTokens, Notifiable;

    public function register(Request $request)
    {
       return User::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'birthday' => $request->input('birthday'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ]);
    }
//
//    public function login(Request $request)
//    {
//       if (!Auth::attempt($request->only('email','password'))) {
//           return response([
//               'message' => 'Access Denied! Invalid Credentials.'
//           ], Response::HTTP_UNAUTHORIZED);
//       }
//
//       $user = Auth::user();
//
//       $token = $user->createToken('token')->plainTextToken;
//
//       $cookie = cookie('jwt', $token, 60 * 24);
//
//       return response([
//           'message' => $token
//       ])->withCookie($cookie);
//    }
//
//
//    public function user()
//    {
//        return Auth::user();
//    }

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    public function login(): \Illuminate\Http\JsonResponse
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }


    public function me(): \Illuminate\Http\JsonResponse
    {

        return response()->json(request()->all());
        return response()->json(auth()->user());
    }


    public function logout(): \Illuminate\Http\JsonResponse
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }


    public function refresh(): \Illuminate\Http\JsonResponse
    {
        return $this->respondWithToken(auth()->refresh());
    }


    protected function respondWithToken(string $token): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
