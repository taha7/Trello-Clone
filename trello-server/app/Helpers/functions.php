<?php
function makeResponse($data = null, $message = '', $code = 200, $validation = null, $headers = [], $error = null)
{
   return response()->json([
      'status' => in_array($code, successStatus()) ? true : false,
      'data' => $data,
      'message' => $message,
      'error' => $error,
      'validation' => $validation
   ], $code, $headers);
}

function successStatus()
{
   return [
      200, // Ok
      201, // created
      202 // accepted
   ];
}
