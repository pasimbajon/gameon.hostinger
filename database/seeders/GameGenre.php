<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GameGenre extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genre = [
            [
                'genre_name' => 'Action'
            ],
            [
                'genre_name' => 'Adventure'
            ],
            [
                'genre_name' => 'Fighting'
            ],
            [
                'genre_name' => 'Platform'
            ],
            [
                'genre_name' => 'Puzzle'
            ],
            [
                'genre_name' => 'Racing'
            ],
            [
                'genre_name' => 'Role-Playing'
            ],
            [
                'genre_name' => 'Shooter'
            ],
            [
                'genre_name' => 'Simulation'
            ],
            [
                'genre_name' => 'Sports'
            ],
            [
                'genre_name' => 'Strategy'
            ],
        ];

        foreach($genre as $key => $value){
            Genre::create($value);
        }
    }
}
