<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bands')->insert([
            [
                'name' => 'Metallica',
                'genre' => 'Heavy Metal',
                'founded' => 1981,
                'active_till' => 'Heden',
            ],
            [
                'name' => 'Iron Maiden',
                'genre' => 'Heavy Metal',
                'founded' => 1975,
                'active_till' => 'Heden',
            ],
            [
                'name' => 'AC/DC',
                'genre' => 'Heavy Metal',
                'founded' => 1973,
                'active_till' => 'Heden',
            ]
            ]);
        
    }
}
