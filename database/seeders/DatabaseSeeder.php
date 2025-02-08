<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $services= [["name"=>"UI/UX Development","description"=>"Creazione di interfacce personalizzate","img"=>null,"price"=>"1200"],["name"=>"Cybersecurity","description"=>"Protezioni contro attacchi informatici","img"=>null,"price"=>"2000"],["name"=>"AI development","description"=>"Sviluppo di chatbot e automazione","img"=>null,"price"=>"1800"]];

       $user = \App\Models\User::first();

       foreach($services as $service){
        DB::table("services")->insert([
            "name"=>$service["name"],
            "description"=>$service["description"],
            "img"=>$service["service.jpg"],
            "price"=>$service["price"],
            "user_id"=>$user->id
        ]);
       }
    }
}
