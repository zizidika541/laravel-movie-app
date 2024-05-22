<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Genreseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Shounen',
            'description' => 'Shounen is a genre in Japanese manga and anime that is aimed specifically at young male audiences, especially in the teenage to early adult age group.',
        ]);
        Genre::create([
            'name' => 'Drama',
            'description' => 'The drama genre is a genre that invites the audience to feel the emotional journey of the characters through the conflicts they face.',
        ]);
        Genre::create([
            'name' => 'Action',
            'description' => 'The action genre is a genre full of tense scenes with a focus on the heroic actions of the characters.',
        ]);
        Genre::create([
            'name' => 'Comedy',
            'description' => 'The comedy genre is a story genre whose main aim is to entertain the audience and make them laugh.',
        ]);
        Genre::create([
            'name' => 'Romance',
            'description' => 'The romantic genre is a story genre that focuses on the romance and affection between the characters.',
        ]);
    }
}
