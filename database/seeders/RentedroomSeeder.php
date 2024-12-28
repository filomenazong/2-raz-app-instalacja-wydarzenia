<?php

namespace Database\Seeders;

use App\Models\Rentedroom;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\RentedroomModel;
use Database\Factories\RentedroomFactory;
use Illuminate\Database\Seeder;

class RentedroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Rentedroom::factory()->count(50)->create();
        //RentedroomFactory::factory(50)->create();
    }
}

