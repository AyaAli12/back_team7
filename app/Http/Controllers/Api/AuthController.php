<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Http\Traits\ApiResponse;
use App\Models\User;
use Faker\Core\Uuid;
use Illuminate\Http\Request;

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
}
