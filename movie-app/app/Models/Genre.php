<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [
        [
            'id' => 1,
            'genre' => 'Shounen',
            'description' => 'Shounen is a genre in Japanese manga and anime that is aimed specifically at young male audiences, especially in the teenage to early adult age group.',
        ],
        [
            'id' => 2,
            'genre' => 'Drama',
            'description' => 'The drama genre is a genre that invites the audience to feel the emotional journey of the characters through the conflicts they face.',
        ],
        [
            'id' => 3,
            'genre' => 'Action',
            'description' => 'The action genre is a genre full of tense scenes with a focus on the heroic actions of the characters.',
        ],
        [
            'id' => 4,
            'genre' => 'Comedy',
            'description' => 'The comedy genre is a story genre whose main aim is to entertain the audience and make them laugh.',
        ],
        [
            'id' => 5,
            'genre' => 'Romance',
            'description' => 'The romantic genre is a story genre that focuses on the romance and affection between the characters.',
        ],
    ];

    public function getAllGenres()
    {
        return $this->genres;
    }

}
