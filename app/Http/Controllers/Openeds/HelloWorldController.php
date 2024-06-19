<?php

namespace App\Http\Controllers\Openeds;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Services\HelloWorldService;
use App\Http\Controllers\Controller;

class HelloWorldController extends Controller
{
    public function get(): JsonResponse{

        $helloWorld = new HelloWorldService();
        return response()->json($helloWorld->get());
    }
}
