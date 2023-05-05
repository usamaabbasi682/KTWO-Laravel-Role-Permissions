<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use App\Models\ModelPermit;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Default Models
        $models = [
            'user' => 'User Model Related to user permissions',
            'role' => 'Role Model Related to role permissions',
            'permission' => 'Permission Model Related to permissions',
            'model' => 'Model Related to model permissions',
            'profile' => 'Profile Model Related to profile permissions',
            'setting' => 'Setting Model Related to setting permissions'
        ];

        // Default Permissions
        $permissions = [
            'create-user','update-user','view-user','delete-user',
            'create-role','update-role','view-role','delete-role',
            'create-permission','update-permission','view-permission','delete-permission',
            'create-model','update-model','view-model','delete-model',
            'update-profile','delete-profile',
            'update-setting',
        ];

        // Creating models
        foreach ($models as $model_name => $model_desc) {
            ModelPermit::create([
                'model_name' => $model_name,
                'desc' => $model_desc,
            ]);
        }

        // Creating permissions
        foreach ($permissions as $permission) {
            Permission::create(['name' =>$permission]);
        }

    }
}
