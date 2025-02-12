<?php

namespace App\Livewire;


use App\Models\Contact;
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
        ]);

        Contact::create([
            "name"=> $this->name,
            "email"=> $this->email,
            "info"=> $this->info
        ]);

        $this->reset(["name","email","info"]);
        $this->success= true;

        session()->flash("success","Invio effettuato con successo! a breve riceverà una mail di conferma!");
    }


    public function render()
    {
        return view('livewire.contactForm');
    }
}
