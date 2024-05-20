<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $reviews = [
        [
            'id' => 1,
            'title' => 'Jojo Bizzare Adventure',
            'poster' => 'movie-01.jpg',
            'user' => '@Abdul_Aziz',
            'rating' => '4/5',
            'date' => '12 Desember 2022',
        ],
        [
            'id' => 2,
            'title' => 'Noragami',
            'poster' => 'movie-02.jpg',
            'user' => '@emily_watson',
            'rating' => '3,5/5',
            'date' => '23 april 2019',
        ],
        [
            'id' => 3,
            'title' => 'Wind Breaker',
            'poster' => 'movie-03.jpg',
            'user' => '@yamada_haruki',
            'rating' => '3/5',
            'date' => '13 mei 2024',
        ],
        [
            'id' => 4,
            'title' => 'Spy x Family',
            'poster' => 'movie-04.jpg',
            'user' => '@jack_andreas',
            'rating' => '4,5/5',
            'date' => '20 juli 2021',
        ],
        [
            'id' => 5,
            'title' => 'Attack on Titan',
            'poster' => 'movie-05.jpg',
            'user' => '@Asep_Gunawan',
            'rating' => '5/5',
            'date' => '4 november 2023',
        ],
    ];

    public function getAllReviews()
    {
        return $this->reviews;
    }

}
