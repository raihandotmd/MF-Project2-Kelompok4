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
    public function store(Request $request, Seats $seats)
    {
        $validated = $request->validate([
            'cinema_id' => 'required',
            'seat_code' => 'required|max:3',
            'seat_status' => 'required',
        ]);

        $seats->create($validated);

        if ($seats) {
            return redirect()->route('seats')->with('success', 'Seat created successfully');
        }
        return back();
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
        $validated = $request->validate([
            'cinema_id' => 'required',
            'seat_code' => 'required|max:3',
            'seat_status' => 'required',
        ]);

        $seat = Seats::find($request->idedit);
        $seat->update($validated);
        if ($seat) {
            return redirect()->route('seats')->with('success', 'Seat updated successfully');
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $seat = Seats::find($id);
        $seat->delete();
        return redirect()->route('seats')->with('success', 'Seat deleted successfully');
    }
}
