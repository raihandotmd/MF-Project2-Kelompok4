<?php

namespace App\Http\Controllers;

use App\Models\MoviesSchedule;
use Illuminate\Http\Request;

class MoviesScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies_schedule = MoviesSchedule::all();
        return view('admin.movie_schedule.index', compact('movies_schedule'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MoviesSchedule $moviesSchedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MoviesSchedule $moviesSchedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MoviesSchedule $moviesSchedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MoviesSchedule $moviesSchedule)
    {
        //
    }
}
