<?php

namespace Database\Seeders;

use App\Enums\Auth\PermissionType;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;



class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Uprawnieni seeder
     */
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
        
        Permission::create(['name' => PermissionType::USER_ACCESS->value]);
        Permission::create(['name' => PermissionType::USER_MANAGE->value]);

        Permission::create(['name' => PermissionType::RENTEDROOM_ACCESS->value]);
        Permission::create(['name' => PermissionType::RENTEDROOM_MANAGE->value]);

        Permission::create(['name' => PermissionType::EQUIPMENT_ACCESS->value]);
        Permission::create(['name' => PermissionType::EQUIPMENT_MANAGE->value]);

        Permission::create(['name' => PermissionType::RENTALLOG_ACCESS->value]);
        Permission::create(['name' => PermissionType::RENTALLOG_MANAGE->value]);
    }
}
