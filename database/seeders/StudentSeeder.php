<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'name' => 'Jek',
                'code' => '240414001',
                'major' => 'IF',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Robby',
                'code' => '240414002',
                'major' => 'IF',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
