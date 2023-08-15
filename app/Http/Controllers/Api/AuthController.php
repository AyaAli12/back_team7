<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Traits\ApiResponse;
use App\Models\User;
use Faker\Core\Uuid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use ApiResponse;
    public function register(RegisterRequest $request){
        try{
            $user = User::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'role'=>'student',
                'collage_id' => $request->collage_id,
            ]);

            $token = $user->createToken('Register API Token')->plainTextToken ;
            $data['token'] = $token;
            $data['name'] = $user->name;

            return $this->successResponse($data, " created Successfuly",200);
        }
        catch (\Exception $e) 
        { 
            return $this->errorResponse("ERROR. ". $e->getMessage(),500);
        } 
    }
    public function login(LoginRequest $request)
    {
        try {
            $user = User::where('name', $request->name)->first();

        if (!Auth::attempt($request->only('name', 'code'))) {
            return $this->errorResponse('name or code incorrect', 404);
        } else {
            $token = $user->createToken($user->name . "_token")->plainTextToken;
            $success['token'] = $token;
            $success['name'] = $user->name;
            return $this->successResponse($success, 'login success', 200);
        }
        } catch (\Throwable $e) {
            
            return $this->errorResponse("ERROR. ". $e->getMessage(),500);
        }
      
    }
}
