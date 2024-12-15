<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('albums')->insert([
            [
                'name' => 'Master of Puppets',
                'year' => 1986,
                'times_sold' => 103,
            ],
            [
                'name' => 'The Number of the Beast',
                'year' => 1982,
                'times_sold' => 102,
            ],
            [
                'name' => 'Back in Black',
                'year' => 1980,
                'times_sold' => 104,
            ],
            [
                'name' => 'Ride the Lightning',
                'year' => 1984,
                'times_sold' => 103,
            ],
            [
                'name' => 'The Final Frontier',
                'year' => 2010,
                'times_sold' => 103,
            ]
        ]);
    }
}
