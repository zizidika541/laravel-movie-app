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
            'movie_id' => '1',
            'poster' => 'movie-01.jpg',
            'user' => '@Abdul_Aziz',
            'rating' => '4/5',
            'date' => '12 Desember 2022',
        ]);
        Review::create([
            'movie_id' => '2',
            'poster' => 'movie-02.jpg',
            'user' => '@emily_watson',
            'rating' => '3,5/5',
            'date' => '23 april 2019',
        ]);
        Review::create([
            'movie_id' => '3',
            'poster' => 'movie-03.jpg',
            'user' => '@yamada_haruki',
            'rating' => '3/5',
            'date' => '13 mei 2024',
        ]);
        Review::create([
            'movie_id' => '4',
            'poster' => 'movie-04.jpg',
            'user' => '@jack_andreas',
            'rating' => '4,5/5',
            'date' => '20 juli 2021',
        ]);
        Review::create([
            'movie_id' => '5',
            'poster' => 'movie-05.jpg',
            'user' => '@Asep_Gunawan',
            'rating' => '5/5',
            'date' => '4 november 2023',
        ]);
    }
}
