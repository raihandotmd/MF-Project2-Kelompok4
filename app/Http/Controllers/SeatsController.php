<?php

namespace App\Http\Controllers;

use App\Models\Seats;
use Illuminate\Http\Request;
use App\Models\Cinemas;

class SeatsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seats = Seats::all();
        return view('admin.seats.index', compact('seats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cinemas = Cinemas::all();
        return view('admin.seats.form', compact('cinemas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Seats::create($request->all());
        return redirect()->route('seats');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $seat = Seats::find($id);
        $cinemas = Cinemas::all();
        return view('admin.seats.form_edit', compact('seat', 'cinemas'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Seats $seat)
    {
        $seat = Seats::find($request->idedit);
        $seat->update($request->all());
        return redirect()->route('seats');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $seat = Seats::find($id);
        $seat->delete();
        return redirect()->route('seats');
    }
}
