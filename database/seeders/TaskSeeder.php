<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = [
            ['name' => 'Task 1', 'description' => 'Task 1 description', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Task 2', 'description' => 'Task 2 description', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Task 3', 'description' => 'Task 3 description', 'created_at' => now(), 'updated_at' => now()],
        ];

        if(DB::table('tasks')->insert($tasks)) {
            $this->command->info('Tasks seeded successfully');
        } else {
            $this->command->error('Failed to seed tasks');
        }
    }
}
