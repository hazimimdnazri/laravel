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
            ['name' => 'Admin', 'description' => 'Admin role', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'User', 'description' => 'User role', 'created_at' => now(), 'updated_at' => now()],
        ];

        if(DB::table('roles')->insert($roles)) {
            $this->command->info('Roles seeded successfully');
        } else {
            $this->command->error('Failed to seed roles');
        }
    }
}
