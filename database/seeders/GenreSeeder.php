<?php

namespace Database\Seeders;
use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Shounen',
            'description' => 'Shōnen manga is an editorial category of Japanese comics targeting an audience of adolescent boys.',
        ]);
    
        Genre::create([
            'name' => 'Drama',
            'description' => 'Drama is a captivating literary genre that is brought to life through performance.',
        ]);
    
        Genre::create([
            'name' => 'School',
            'description' => ' It focuses on school students and is closely related to other genres such as slice of life, action, comedy, and especially romance.',
        ]);

        Genre::create([
            'name' => 'family',
            'description' => 'tells the story of spies, assassins, and telepaths who disguise themselves as a family for their own reasons',

        ]);

        Genre::create([
            'name' => 'Action',
            'description' => 'follows the story of Im Sol (played by Kim Hye Yoon), who idolizes a handsome KPop idol named Ryu Sun Jae (played by Byeon Woo Seok). When mysteriously traveling back in time to 2008, Im Sol finds Ryu Sun Jae in high school under heavy pressure. The woman tried to prevent Ryu Sun Jae from committing suicide.'
        ]);
    }
}
