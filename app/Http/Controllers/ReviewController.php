<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class ReviewController extends Controller implements HasMiddleware
{
    
    public static function middleware(): array
    {
        return [
            new Middleware('auth', only: ['create','show']),
        ];
    }
    
    /**
    * Display a listing of the resource.
    */
    public function index()
    {
        $reviews= Review::paginate(6);
        return view("review/index",compact("reviews"));
    }
    
    /**
    * Show the form for creating a new resource.
    */
    public function create($service_id)
    {
        // Recupera il servizio per ID
        $service = Service::findOrFail($service_id);
        return view('review.createReview', compact('service'));
    }
    
    /**
    * Store a newly created resource in storage.
    */
    public function store(Request $request)
    {
        $validated= $request->validate([
            "rating"=>"required",
            "comment"=>"required|string|max:500",
            "service_id"=>"exists:services,id",
        ],
        [
            "rating.required"=>"Seleziona un valore da 1 a 5!",
            "comment.required"=>"Motiva il valore assegnato!",
            "comment.max"=>"Non puoi superare i 500 caratteri",
            "service_id.exist"=>"Il servizio selezionato non esiste"
        ]);
        
        $user= Auth::user();
        $user->reviews()->create([
            "rating"=>$request->rating,
            "comment"=>$request->comment,
            "service_id"=>$request->service_id,
        ]);
        
        return redirect()->route('user.reviews', ['service_id' => $request->service_id])
        ->with('status', 'Recensione inviata con successo!');
        
    }
    
    /**
    * Display the specified resource.
    */
    public function show(Review $review)
    {
        //
    }
    
    /**
    * Show the form for editing the specified resource.
    */
    public function edit(Review $review)
    {
        //
    }
    
    /**
    * Update the specified resource in storage.
    */
    public function update(Request $request, Review $review)
    {
        //
    }
    
    /**
    * Remove the specified resource from storage.
    */
    public function destroy(Review $review)
    {
        //
    }
}
