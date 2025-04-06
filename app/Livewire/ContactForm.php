<?php

namespace App\Livewire;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public $name,$email,$info;
    public $success= false;
    
    public function store(){
        $this->validate([
            "name"=>"required|string|max:100",
            "email"=>"required|email",
            "info"=>"required|string|max:500",
        ],
        [
            'name.required'=>'Inserisci il tuo nome',
            'email.required'=>'Inserisci la tua mail',
            'info'=>'Lascia una breve descrizione della tua richiesta!'
        ]);
        
        $contact= Contact::create([
            "name"=> $this->name,
            "email"=> $this->email,
            "info"=> $this->info
        ]);
        
        Mail::to("$this->email")->send(New ContactMail($contact));
        
        $this->reset(["name","email","info"]);
        $this->success= true;
        
        session()->flash("success","Invio effettuato con successo! a breve riceverà una mail di conferma!");
    }
    
    
    public function render()
    {
        return view('livewire.contactForm');
    }
}
