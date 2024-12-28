<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\RentedroomModel;
use App\Http\Controllers\Rentedroom;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
     $this->call(PermissionSeeder::class);
      $this->call(RoleSeeder::class);
      
      $this->call(RentedroomSeeder::class);

     // $this->call(UserSeeder::class);


    }
}
