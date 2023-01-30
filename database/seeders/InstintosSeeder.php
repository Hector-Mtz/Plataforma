<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstintosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('instintos')->insert([
            'nombre' => "Justicia",
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('instintos')->insert([
            'nombre' => "Orden",
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('instintos')->insert([
            'nombre' => "Destruccion",
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('instintos')->insert([
            'nombre' => "Crueldad",
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
