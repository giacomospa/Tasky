<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class PublicController extends Controller implements HasMiddleware
{

    public static function middleware(): array
    {
        return [
            new Middleware('auth', except: ['home','contacts'])
        ];
    }

    public function home(){
        return view("welcome");
    }

    public function userProfile(){
        return view("auth.profile");
    }

    public function userServices(){
        return view('auth.userServices');
    }

    public function userReviews(){
        $user = Auth::user();
        $reviews = Review::where('user_id', $user->id)->paginate(6);
        
        return view('auth.userReviews', compact('reviews'));
    }

    public function contacts(){
        return view("contacts.contact");
    }

}

