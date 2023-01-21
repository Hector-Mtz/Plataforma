<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('games')->insert([
            'games_name' => "Marvel Future Fight",
            'logo' => '',
            'imagen_ilustrativa' => '',
            'descripcion' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('games')->insert([
            'games_name' => "The Seven Deadlys Sins:Grand Cross",
            'logo' => '',
            'imagen_ilustrativa' => '',
            'descripcion' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
