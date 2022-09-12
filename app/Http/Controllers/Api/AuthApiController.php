<?php

namespace App\Http\Controllers\API;


use App\Models\User;
use App\Http\Controllers\API\ResponseApiController as ResponseApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\UserResource;



class AuthApiController extends ResponseApiController
{
   
    public function signIn(Request $request)
    {  
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:250',
        'email' => 'required|string|email|max:250|unique:users',
        'password' => 'required|string|min:4',
    ]);
    if ($validator->fails())
    {
        return response(["success" => false, 'errors'=>$validator->errors()->all()], 422);
    }
    $user = User::create([
        'name' => $request['name'],
        'email' => $request['email'],
        'password' => Hash::make($request['password'])
    ]);

    $success['token'] = $user->createToken('testHomepad')->plainTextToken;
    $success['user'] =  new UserResource($user);
    Auth::login($user);
  
    return $this->sendResponse($success, 'User signed in');
    }


    public function logIn(Request $request)
    {  
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:250',
            'password' => 'required|string|min:4',
        ]);
        if ($validator->fails())
        {   
        return $this->sendError($validator->errors()->all());
        }

       
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('testHomepad')->plainTextToken; 
            $success['user'] =  new UserResource($user);
            return $this->sendResponse($success, 'User logged in');
            } 
            else{ 
                $user = User::where('email', $request->email)->first();
                if ($user) {
                return $this->sendError('Password mismatch');
                } else {
                return $this->sendError('User does not exist');
                }
            } 
    }
    
}
