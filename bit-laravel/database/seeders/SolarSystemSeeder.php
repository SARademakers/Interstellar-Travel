<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class SolarSystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('solarsystems')->insert([
            'name' => 'Milky-way',
            'size_in_km' => '50',
            'age_in_years' => '999'
        ]);
        DB::table('solarsystems')->insert([
            'name' => 'andromeda',
            'size_in_km' => '62',
            'age_in_years' => '666'
        ]);
    }
}
