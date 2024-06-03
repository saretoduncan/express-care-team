<?php

namespace Database\Seeders;

use App\Models\UserRoles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $roles = [
            'ADMIN',
            'PROVIDER',
            'CAREGIVER'
        ];
        foreach ($roles as $role) {
            $res = UserRoles::where('role', $role)->first();
            if (!isset($res)) {
                UserRoles::create([
                    'role' => $role
                ]);
            }
        }
    }
}
