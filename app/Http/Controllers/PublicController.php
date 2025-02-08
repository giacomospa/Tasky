<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class PublicController extends Controller implements HasMiddleware
{

    public static function middleware(): array
    {
        return [
            new Middleware('auth', except: ['home']),
        ];
    }

    public function home(){
        return view("welcome");
    }

    public function userProfile(){
        return view("auth.profile");
    }
}

