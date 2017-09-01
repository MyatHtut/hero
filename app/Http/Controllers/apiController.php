<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class apiController extends Controller
{
    public function errorResponse($message)
    {
        return Response::json([
            'error' => [
                'messsage' => $message,
                'code' => 404,
            ],

        ], 404);
    }
}
