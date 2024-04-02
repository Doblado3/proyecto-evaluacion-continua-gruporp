<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pacientes')->insert([
            [
                'dni' => "22233345L",
                'nuhsa' => "AN999999",
                'user_id' => 5,
            ],
            [
                'dni' => "33344456A",
                'nuhsa' => "AN888888",
                'user_id' => 6,
            ],
        ]);
    }
}
