<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public static function success() {
        return [
            'code' => 200,
            'message' => 'Success',
        ];
    }

    public static function successWith($message) {
        return [
            'code' => 200,
            'message' => $message,
        ];
    }

    public static function fail($code) {
        return [
            'code' => $code,
            'message' => 'Fail',
        ];
    }

    public static function failWith($code, $message) {
        return [
            'code' => $code,
            'message' => $message,
        ];
    }
}
