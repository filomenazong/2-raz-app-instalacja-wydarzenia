<?php

namespace Database\Seeders;

use App\Enums\Auth\RoleType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory(100)->create();
        
        \App\Models\User::factory()->create([
            'name' => 'Użytkownik Testowy',
            'email' => 'user.test@localhost',
            'password' => Hash::make('12345678'),
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Pracownik Testowy',
            'email' => 'worker.test@localhost',
            'password' => Hash::make('12345678'),
        ])->assignRole(RoleType::WORKER->value);

        \App\Models\User::factory()->create([
            'name' => 'Administrator Testowy',
            'email' => 'admin.test@localhost',
            'password' => Hash::make('12345678'),
        ])->assignRole(RoleType::ADMIN->value);
    }
}