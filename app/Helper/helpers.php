<?php

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

function getStatuses()
{
    return [
        'active'  => 'Active',
        'passive' => 'Passive',
    ];
}

function sendResponse($data, $message = null)
{
    return response()->json([
        'success' => true,
        'data'    => $data,
        'message' => $message,
    ], JsonResponse::HTTP_OK);
}

function sendError($error = null, $data = null)
{
    throw new HttpResponseException(
        response()->json([
            'success' => false,
            'data'    => $data,
            'error'   => $error,
        ], JsonResponse::HTTP_UNPROCESSABLE_ENTITY)
    );

}
