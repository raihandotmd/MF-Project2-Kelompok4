<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;
use App\Models\MovieGenre;

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
        $movies->create($request->all());
        return redirect()->route('movies');
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
        $movie = Movies::find($request->idedit);
        $movie->update($request->all());
        return redirect()->route('movies');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $movie = Movies::find($id);
        $movie->delete();
        return redirect()->route('movies');
    }
}
