<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request){
        $input=$request->all();
        $input['password']=bcrypt($input['password']);
        $user=User::create($input);
        $success['token']= $user->createToken('MyApp')->plainTextToken;
        $success['name'] = $user->name;
        return response()->json(['data'=>$success , 'message' => 'register success'] , 200);
     }

     public function login(Request $request){
        if(Auth::attempt(['email' => $request->email , 'password'=>$request->password])){
            $user=Auth::user();
            $success['token']=$user->createToken('myApp')->plainTextToken;
            return response()->json(['data'=>$success ,'message'=>'login successfully'],200);
            
        }else{
            return response()->json(['message'=>'login faild'],200);
        }
    }


    public function logout(Request $request)
    {
        $user = auth()->user();
    
        if ($user) {
            $user->tokens()->delete();
            return response()->json(['message' => 'Logged out successfully']);
        } else {
            return response()->json(['error' => 'No authenticated user'], 401);
        }
}
}