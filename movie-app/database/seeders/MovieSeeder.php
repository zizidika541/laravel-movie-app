<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            'title' => 'Jojo Bizarre Adventure',
            'genre_id' => '1',
            'poster' => 'movie-01.jpg',
            'synopsis' => 'Jojos Bizarre Adventure is a story about the Joestar family, who are possessed with intense psychic strength.',
        ]);
    
        Movie::create([
            'title' => 'Noragami',
            'genre_id' => '1',
            'poster' => 'movie-02.jpg',
            'synopsis' => 'Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god.',
        ]);
    
        Movie::create([
            'title' => 'Wind Breaker',
            'genre_id' => '3',
            'poster' => 'movie-03.jpg',
            'synopsis' => 'Haruka Sakura wants nothing to do with weaklings—hes only interested in the strongest of the strong.',
        ]);

        Movie::create([
            'title' => 'Spy x Family',
            'genre_id' => '4',
            'poster' => 'movie-04.jpg',
            'synopsis' => 'A spy on an undercover mission gets married and adopts a child as part of his cover.',
        ]);

        Movie::create([
            'title' => 'Attack on Titan',
            'genre_id' => '2',
            'poster' => 'movie-05.jpg',
            'synopsis' => 'the story follows Eren Yeager, who vows to exterminate the Titans after they bring about the destruction of his hometown and the death of his mother.',
        ]);
    }
}
