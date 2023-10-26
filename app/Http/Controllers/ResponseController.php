<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function sendResponse($result, $message){

        $response=[
            'success'=> true,
            'message' =>$message
        ];
        return response()->json($response,200);
    }



    public function sendError($error,$errorMessage=[],$code= 404){
        $response=[
            'success'=> true,
            'message' =>$error
        ];

        if(!empty($errorMessage)){
            $response['data']= $errorMessage;
        }

        return response()->json($response, $code);
    }

}
