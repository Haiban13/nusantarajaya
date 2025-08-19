<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class userrole extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ensure roles exist
        $superadmin = Role::firstOrCreate(['name' => 'superadmin']);
        $admin      = Role::firstOrCreate(['name' => 'admin']);
        $user       = Role::firstOrCreate(['name' => 'user']);

        // Assign roles based on old `role` column
        User::chunk(100, function ($users) {
            foreach ($users as $user) {
                switch ($user->role) {
                    case 'superadmin':
                        $user->syncRoles('superadmin');
                        break;
                    case 'admin':
                        $user->syncRoles('admin');
                        break;
                    default:
                        $user->syncRoles('user');
                        break;
                }
            }
        });
    }
}
