<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth as FacadesJWTAuth;

use function PHPUnit\Framework\arrayHasKey;

// use Tymon\JWTAuth\Exceptions\TokenExpiredException;

class UserController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->only('national_id', 'password');
        if (!array_key_exists('national_id', $credentials) || !array_key_exists('password', $credentials))
            return response()->json(['error' => 'invalid_credentials'], 401);
        try {
            if (!$token = FacadesJWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 400);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        return response()->json(compact('token'));
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'email' => 'string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'date_of_birth' => 'required|date',
            'national_id' => 'required|digits:10|unique:users',
            'immunity_status' => 'required|in:Immune,No record of infection,Exposed,Infected,Home quarantine,Institutional quarantine',
            'passport_no' => 'required|string|min:7|max:10|unique:users',
            'blood_type' => 'required|in:O-,O+,A-,A+,B-,B+,AB-,AB+',
            'immunity_date' => 'date'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $user = User::create([
            'name' => $request->get('name'),
            'name_ar' => $request->get('name_ar'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'date_of_birth' => $request->get('date_of_birth'),
            'national_id' => $request->get('national_id'),
            'immunity_status' => $request->get('immunity_status'),
            'passport_no' => $request->get('passport_no'),
            'blood_type' => $request->get('blood_type'),
            'immunity_date' => $request->get('immunity_date'),
            'vaccine_id' => 1,
        ]);

        $token = FacadesJWTAuth::fromUser($user);

        return response()->json(compact('user', 'token'), 201);
    }

    public function getAuthenticatedUser()
    {
        try {

            if (!$user = FacadesJWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }
        } catch (\Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

            return response()->json(['token_expired'], $e->getCode());
        } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

            return response()->json(['token_invalid'], $e->getCode());
        } catch (\Tymon\JWTAuth\Exceptions\JWTException $e) {

            return response()->json(['token_absent'], $e->getCode());
        }

        return response()->json(compact('user'));
    }
}
