<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'super_admin', 'status' => 1],
            ['name' => 'admin', 'status' => 1],
            ['name' => 'guest', 'status' => 1]
        ];

        foreach($roles as $role) {
            DB::table('roles')->insert($role);
        }
    }
}
