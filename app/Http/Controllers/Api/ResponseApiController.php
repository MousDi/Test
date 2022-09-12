<?php


namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller as Controller;


class ResponseApiController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendResponse($result, $message)
    {
    	$response = [
            'success' => true,
            'data'    => $result,
            'message' => $message,
        ];


        return response()->json($response, 200);
    }


    /**
     * error response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendError($error, $code = 422)
    {
    	$response = [
            'success' => false,
            'errors' => $error,
        ];


        return response()->json($response, $code);
    }
}