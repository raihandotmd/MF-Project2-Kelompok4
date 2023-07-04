<?php

namespace App\Http\Controllers;

use App\Models\MovieSchedule;
use Illuminate\Http\Request;
use App\Models\Movies;
use App\Models\Cinemas;

class MovieScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies_schedule = MovieSchedule::all();
        return view('admin.movie_schedule.index', compact('movies_schedule'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $movies = Movies::all();
        $cinemas = Cinemas::all();
        return view('admin.movie_schedule.form', compact('movies', 'cinemas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, MovieSchedule $moviesSchedule)
    {
        $validated = $request->validate([
            'movie_id' => 'required',
            'cinema_id' => 'required',
            'starts' => 'required',
            'ends' => 'required',
            'price' => 'required',
        ]);

        $moviesSchedule->create($validated);
        if ($moviesSchedule) {
            return redirect()->route('movie_schedule')->with('success', 'Movie Schedule created successfully');
        }
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $movie_schedule = MovieSchedule::find($id);
        $movies = Movies::all();
        $cinemas = Cinemas::all();
        return view('admin.movie_schedule.form_edit', compact('movie_schedule', 'movies', 'cinemas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MovieSchedule $movieSchedule)
    {
        $validated = $request->validate([
            'movie_id' => 'required',
            'cinema_id' => 'required',
            'starts' => 'required',
            'ends' => 'required',
            'price' => 'required',
        ]);
        $movieSchedule = MovieSchedule::find($request->idedit);
        $movieSchedule->update($validated);
        if ($movieSchedule) {
            return redirect()->route('movie_schedule')->with('success', 'Movie Schedule updated successfully');
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $movie_schedule = MovieSchedule::find($id);
        $movie_schedule->delete();
        return redirect()->route('movie_schedule')->with('success', 'Movie Schedule deleted successfully');
        
    }
}
