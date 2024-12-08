<?php

namespace Database\Seeders;

use App\Enums\Auth\RoleType;
use Illuminate\Database\Seeder;
use App\Enums\Auth\PermissionType;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Uruchomienie konkretnego seedera:
        // sail artisan db:seed --class=RoleSeeder

        // Reset cache'a ról i uprawnień:
        // sail artisan permission:cache-reset
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        Role::create(['name' => RoleType::ADMIN]);
        Role::create(['name' => RoleType::WORKER]);
        Role::create(['name' => RoleType::USER]);

        /*
        //Dla kazdej roli nadawene uprawnia
        // ADMINISTRATOR SYSTEMU
        $userRole = Role::findByName(RoleType::ADMIN->value);
        
        $userRole->givePermissionTo(PermissionType::USER_ACCESS->value);
        $userRole->givePermissionTo(PermissionType::USER_MANAGE->value);

        $userRole->givePermissionTo(PermissionType::RENTEDROOM_ACCESS->value);
        $userRole->givePermissionTo(PermissionType::RENTEDROOM_MANAGE->value);

        $userRole->givePermissionTo(PermissionType::EQUIPMENT_ACCESS->value);
        $userRole->givePermissionTo(PermissionType::EQUIPMENT_MANAGE->value);

        $userRole->givePermissionTo(PermissionType::RENTALLOG_ACCESS->value);
        $userRole->givePermissionTo(PermissionType::RENTALLOG_MANAGE->value);

        // PRACOWNIK
        $userRole->givePermissionTo(PermissionType::RENTEDROOM_ACCESS->value);
        $userRole->givePermissionTo(PermissionType::RENTEDROOM_MANAGE->value);

        $userRole->givePermissionTo(PermissionType::EQUIPMENT_ACCESS->value);
        $userRole->givePermissionTo(PermissionType::EQUIPMENT_MANAGE->value);

        $userRole->givePermissionTo(PermissionType::RENTALLOG_ACCESS->value);
        $userRole->givePermissionTo(PermissionType::RENTALLOG_MANAGE->value);

        // UŻYTKOWNIK
        $userRole->givePermissionTo(PermissionType::RENTEDROOM_ACCESS->value);
        $userRole->givePermissionTo(PermissionType::EQUIPMENT_ACCESS->value);
        $userRole->givePermissionTo(PermissionType::RENTALLOG_ACCESS->value);
        
*/
    }
}
