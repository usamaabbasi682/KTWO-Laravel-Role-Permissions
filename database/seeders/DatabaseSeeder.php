<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seeder Calling 
        $this->call([
            PermissionSeeder::class,
        ]);

        // Creating Roles
        $adminRole=Role::create(['name' => 'admin']);
        $userRole=Role::create(['name' => 'user']);
        
        // Create Admin
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
        ]);
        $admin->assignRole(['name' => 'admin']);
        // Giving All Permission to admin
        foreach (Permission::pluck('name') as $permission) {
            $adminRole->givePermissionTo($permission);
        }

        // User Factory
        User::factory(5)->create()->each(function($user){
            $user->assignRole('user');
        });
    }
}
