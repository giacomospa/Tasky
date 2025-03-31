<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class ServiceController extends Controller implements HasMiddleware
{
    
    public static function middleware(): array
    {
        return [
            new Middleware('auth', only: ['create','show','edit']),
        ];
    }
    
    /**
    * Display a listing of the resource.
    */
    public function index()
    {
        $services= Service::paginate(6);
        return view("service/index",compact("services"));
    }
    
    /**
    * Show the form for creating a new resource.
    */
    public function create()
    {
        return view("service/createService");
    }
    
    /**
    * Store a newly created resource in storage.
    */
    public function store(Request $request)
    {
        $validated= $request->validate([
            "name"=>"required|string|max:100",
            "description"=>"required|string|max:255",
            "img" => "nullable|image|mimes:jpg,jpeg,png,gif",
            "price"=>"required|numeric"
        ],
        [
            "name.required"=>"Hai dimenticato il nome del servizio!",
            "description.required"=>"Inserisci una descrizione del tuo servizio",
            "price.required"=>"Inserisci il prezzo!"
        ]);
        // dd($request->all());
        
        // Recupero l'utente loggato
        $user=Auth::user();
        $user->services()->create([
            "name"=>$request->name,
            "description"=>$request->description,
            "img"=>$request->has('img') ? $request->file('img')->store('cover_services', 'public') : '/cover_services/default.jpg',
            "price"=>$request->price,
            "producer"=>Auth::user()->name
        ]);
        
        return redirect()->route("index")->with("success","Servizio inserito con successo!");
    }
    
    /**
    * Display the specified resource.
    */
    public function show(Service $service) 
    {
        return view("service/showService",compact("service"));
    }
    
    /**
    * Show the form for editing the specified resource.
    */
    public function edit(Service $service)
    {
        return view("service/editService",compact("service"));
    }
    
    /**
    * Update the specified resource in storage.
    */
    public function update(Request $request, Service $service)
    {
        $validated= $request->validate([
            "name"=>"required|string|max:100",
            "description"=>"required|string|max:255",
            "img" => "nullable|image|mimes:jpg,jpeg,png,gif",
            "price"=>"required|numeric"
        ],
        [
            "name.required"=>"Hai dimenticato il nome del servizio!",
            "description.required"=>"Inserisci una descrizione del tuo servizio",
            "price.required"=>"Inserisci il prezzo!"
        ]);
        
        // Se l'utente ha caricato una nuova immagine, la sostituiamo; altrimenti manteniamo quella esistente.
        if ($request->hasFile('img')) {
            $imagePath = $request->file('img')->store('cover_services', 'public');
        } else {
            $imagePath = $service->img; // Mantieni l'immagine precedente
        }
        
        $service->update([
            "name"=>$request->name,
            "description"=>$request->description,
            // "img"=>$request->has('img') ? $request->file('img')->store('cover_services', 'public') : '/cover_services/default.jpg',
            "img" => $imagePath,
            "price"=>$request->price,
            "producer"=>Auth::user()->name
        ]);
        
        return redirect()->route("index")->with("success","Servizio aggiornato con successo!");
        
    }
    
    /**
    * Remove the specified resource from storage.
    */
    public function delete(Service $service)
    {
        $service->delete();
        return redirect()->route("index")->with("success","Servizio eliminato con successo!");
    }
}


