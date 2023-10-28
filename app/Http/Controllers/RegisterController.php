<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Laravel\Passport\Bridge\AccessToken;
use Validator;
//use Illuminate\Support\Facades\Validator;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;


class RegisterController extends ResponseController
{
    public function register(Request $request){

        $validator = Validator::make($request->all(),[
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
            'phone_number' => 'required',
            'address' => 'required',
            'rol' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('validation Error', $validator->errors());
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] = $user->createToken('MyApp')->accessToken;
        $success['name'] = $user->name;

        return $this->sendResponse($success, 'User registered succesfully');

    }

    public function login(Request $request): JsonResponse{

        if(Auth::attempt(['email'=> $request->email, 'password'=>$request->password])){
            $user= Auth::user();
            $success['token'] = $user->createToken('MyApp')->accessToken;
            $success['name'] = $user->name;

            return $this->sendResponse($success,'User login successfully.');
        }
        else{
            return $this->sendError('unauthorised.',['Error'=>'Unauthorised']);
        }
    }
}
