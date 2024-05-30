<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([

            'id' => 1,
            'movie_id' => 1,
            'user'=> 'zahiro',
            'rating'=> '9/10',
            'date' => '1 januari 2024',
        ]);

        Review::create([

            'id' => 2,
            'movie_id' => 2,
            'user'=> 'Pops',
            'rating'=> '8/10',
            'date' => '2 februari 2024',
        ]);

    Review::create([

            'id' => 3,
            'movie_id' => 3,
            'user'=> 'Vins',
            'rating'=> '7/10',
            'date' => '3 april 2024',
    
        ]);

        Review::create([

            'id' => 4,
            'movie_id' => 4,
            'user'=> 'Sins',
            'rating'=> '6/10',
            'date' => '5 mei 2024',
    
        ]);

        Review::create([

            'id' => 5,
            'movie_id' => 5,
            'user'=> 'Dans',
            'rating'=> '3/10',
            'date' => '6 juni 2024',
    
        ]);
        
    }
}
