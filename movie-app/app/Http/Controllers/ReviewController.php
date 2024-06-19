<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Movie;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {

        $reviews = Review::all();

    return view('reviews.index', compact('reviews'));
    }

    public function create()
    {
        $movies = Movie::all();
        return view('reviews.create', compact('movies'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required',
            'movie_id' => 'required',
            'poster' => 'required|image',
            'user' => 'required',
            'rating' => 'required',
            'date' => 'required',
        ]);

        if ($request->hasFile('poster')) {
            $imageName = time() . '.' . $request->file('poster')->getClientOriginalExtension();
            $request->file('poster')->storeAs('src/images/movie', $imageName, 'public');
            $validatedData['poster'] = $imageName;
        }
    
        Review::create($validatedData);
    
        return redirect('/reviews')->with('success', 'Review added successfully!');
    }

    public function destroy(Review $review)
    {

        $poster = Storage::disk('public')->delete('src/images/movie/' . $review->poster);

        $review->delete($poster);
        return redirect('/reviews')->with('success', 'Review deleted successfully!');

        $review->delete();
        return redirect('/reviews')->with('success', 'Review deleted successfully!');
    }

    public function edit(Review $review)
    {
        $movies = Movie::all();
        return view('reviews.edit', compact('review', 'movies'));
    }

    public function update(Request $request, Review $review)
    {
        $validatedData = $request->validate([
            'id' => 'required',
            'movie_id' => 'required',
            'poster' => 'nullable|image',
            'user' => 'required',
            'rating' => 'required',
            'date' => 'required',
        ]);

        if ($request->hasFile('poster')) {
            // Delete the old image
            Storage::disk('public')->delete('src/images/movie/' . $review->poster);
    
            // Upload the new image
            $imageName = time() . '.' . $request->file('poster')->getClientOriginalExtension();
            $request->file('poster')->storeAs('src/images/movie', $imageName, 'public');
            $validatedData['poster'] = $imageName;
        }
    
        $review->update($validatedData);
    
        return redirect('/reviews')->with('success', 'Review updated successfully!');
    }
}
