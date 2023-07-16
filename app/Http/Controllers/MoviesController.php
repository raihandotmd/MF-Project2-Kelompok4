<?php

namespace App\Http\Controllers;

use App\Models\MovieGenre;
use App\Models\Movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movies::all();

        return view('admin.movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = MovieGenre::all();

        return view('admin.movies.form', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Movies $movies)
    {

        $validated = $request->validate([
            'code' => 'required|max:255',
            'title' => 'required|max:50',
            'description' => 'required',
            'rating' => 'required|max:5|numeric',
            'genre_id' => 'required',
            'trailer' => 'required',
            'duration' => 'required',
            'release_date' => 'required',
            'director' => 'required',
            'cast' => 'required',
            'country' => 'required',
            'language' => 'required',
            'age_limit' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('movies', 'public');
        }
        $movies->create($validated);

        if ($movies) {
            return redirect()->route('movies')->with('success', 'Movie created successfully');
        }

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movie = Movies::find($id);
        $genre = MovieGenre::find($movie->genre_id);

        return view('admin.movies.show', compact('movie', 'genre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $movie = Movies::find($id);
        $genres = MovieGenre::all();

        return view('admin.movies.form_edit', compact('movie', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'code' => 'required|max:255',
            'title' => 'required|max:50',
            'description' => 'required',
            'rating' => 'required|max:5|numeric',
            'genre_id' => 'required',
            'trailer' => 'required',
            'duration' => 'required',
            'release_date' => 'required',
            'director' => 'required',
            'cast' => 'required',
            'country' => 'required',
            'language' => 'required',
            'age_limit' => 'required',
        ]);

        $movie = Movies::find($request->idedit);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('movies', 'public');
        }

        $movie->update($validated);

        if ($movie) {
            return redirect()->route('movies')->with('success', 'Movie updated successfully');
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $movie = Movies::find($id);
        $movie->delete();

        return redirect()->route('movies')->with('success', 'Movie deleted successfully');
    }
}
