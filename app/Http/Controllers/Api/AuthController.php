<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\JsonResponse;


class AuthController extends Controller
{

        public function registerUser(Request $request)
        {
            try{
                $validateRequest = Validator::make(
                    $request->all(),
                    [
                        "name" => 'required',
                        "email" => 'required|email|unique:users,email',
                        'phonenumber' => 'required|min:11|string',
                        "password" => 'required|confirmed|min:6'

                ]);


                if ($validateRequest->fails()) {
                    return response()->json([
                        'status' => false,
                        'message' => 'Validation Error',
                        'errors' => $validateRequest->errors()
                    ], 401);
                }
                $user = User::create([
                    "name" => $request->name,
                    "email" => $request->email,
                    'phonenumber' => $request->phonenumber,
                    "password" => Hash::make($request->password)
                ]);

                return response()->json([
                    'status' => true,
                    'message' => 'Account Created Successfully',
                    'data'=> $user,
                    'token' => $user->createToken("Api Token")->plainTextToken
                ]);

            }
            catch (\Throwable $th){
                return response()->json([
                    'status' => false,
                    'message' => 'Server Error',
                    'errors' => $th->getMessage()
                ]);


            }

        }


/**
 *
    * @param Request $request
    * @return User

*/
        public function loginUser(Request $request)
        {

            try{

                $validateUser = Validator::make($request->all(),
                [

                    "email" => 'required|email',
                    "password" => 'required'

                ]);

                if ($validateUser->fails())
                {
                    return response()->json([
                        'status' => false,
                        'message' => 'Validation Error',
                        'errors' => $validateUser->errors()
                    ], 401);
                }


                if(!Auth::attempt($request->only(['email', 'password'])))
                {

                            return response()->json([
                                'status' => true,
                                'message' => 'Email & Password does not match with our record.',

                            ], 401);

                }


                $user = User::where('email', $request->email)->first();


                return response()->json([
                    'status' => true,
                    'message' => 'User logged in Successfully',
                    'data'=> $user,
                    'token' => $user->createToken("Api Token")->plainTextToken
                ], 200);


            }

            catch(\Throwable $th){

                return response()->json([
                    'status' => false,
                    'message' => 'Server Error',
                    'errors' => $th->getMessage()
                ], 500);

            }

        }


   

}
