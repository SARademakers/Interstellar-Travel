<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PlanetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('planets')->insert([
            'name' => 'Mars',
            'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.',
            'size_in_km' => '42131231',
            'solarsystem_id' => '1'
        ]);

        DB::table('planets')->insert([
            'name' => 'Venus',
            'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.',
            'size_in_km' => '24123125',
            'solarsystem_id' => '1'
        ]);

        DB::table('planets')->insert([
            'name' => 'Earth',
            'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far thats inhabited by living things.',
            'size_in_km' => '233123',
            'solarsystem_id' => '1'
        ]);

        DB::table('planets')->insert([
            'name' => 'Pluto',
            'description' => 'idfk lol',
            'size_in_km' => '24020',
            'solarsystem_id' => '2'
        ]);
    }
}
