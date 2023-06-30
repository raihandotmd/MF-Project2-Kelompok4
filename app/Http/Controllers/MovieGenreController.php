<?php

namespace App\Http\Controllers;

use App\Models\MovieGenre;
use Illuminate\Http\Request;

class MovieGenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movie_genres = MovieGenre::all();
        return view('admin.movie_genre.index', compact('movie_genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.movie_genre.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MovieGenre $movieGenre, Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|unique:movie_genre|max:25',

        ]);

        $movieGenre->create($validated);
        if ($movieGenre) {
            return redirect()->route('movie_genre');
        }
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $movie_genre = MovieGenre::find($id);
        return view('admin.movie_genre.form_edit', compact('movie_genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:movie_genre|max:25',

        ]);
        $movieGenre = MovieGenre::find($request->idedit);
        
        $movieGenre->update($validated);
        if ($movieGenre) {
            return redirect()->route('movie_genre');
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $movieGenre = MovieGenre::find($id);
        $movieGenre->delete();
        return redirect()->route('movie_genre');
    }
}
