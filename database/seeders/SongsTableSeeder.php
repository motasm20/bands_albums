<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('songs')->insert ([
            [
                'title' => 'Bohemian Rhapsody',
                'singer' => 'Queen',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Stairway to Heaven',
                'singer' => 'Led Zeppelin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Hotel California',
                'singer' => 'Eagles',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Imagine',
                'singer' => 'John Lennon',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Smells Like Teen Spirit',
                'singer' => 'Nirvana',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
