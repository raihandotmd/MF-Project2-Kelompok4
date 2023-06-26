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
        $moviesSchedule->create($request->all());
        return redirect()->route('movie_schedule');
    }

    /**
     * Display the specified resource.
     */
    public function show(MovieSchedule $movie_schedule,string $id)
    {
        $movie_schedule = MovieSchedule::find($id);
        $cinema = Cinemas::find($movie_schedule->cinema_id);
        $movie = Movies::find($movie_schedule->movie_id);
        return view('admin.movie_schedule.show', compact('movie_schedule', 'cinema', 'movie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MovieSchedule $moviesSchedule, string $id)
    {
        $movies_schedule = MovieSchedule::find($id);
        $movies = Movies::all();
        $cinemas = Cinemas::all();
        return view('admin.movie_schedule.form', compact('movies_schedule', 'movies', 'cinemas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MovieSchedule $movieSchedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $movie_schedule = MovieSchedule::find($id);
        $movie_schedule->delete();
        return redirect()->route('movie_schedule');
        
    }
}
