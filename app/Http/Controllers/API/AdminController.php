<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login() {
        return view('admin.login.index');
    }

    public function postLogin(Request $request) {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route(ADMIN_MOVIE_INDEX);
        }
        return redirect()->route(ADMIN_LOGIN);
    }
}
