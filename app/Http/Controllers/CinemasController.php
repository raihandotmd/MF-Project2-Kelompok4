<?php

namespace App\Http\Controllers;

use App\Models\Cinemas;
use Illuminate\Http\Request;

class CinemasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cinemas = Cinemas::all();
        return view('admin.cinemas.index', compact('cinemas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.cinemas.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Cinemas $cinemas)
    {
        $cinemas->create($request->all());
        return redirect()->route('cinemas');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cinema = Cinemas::find($id);
        return view('admin.cinemas.form_edit', compact('cinema'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cinemas $cinemas)
    {
        $cinemas = Cinemas::find($request->idedit);
        $cinemas->update($request->all());
        return redirect()->route('cinemas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cinema = Cinemas::find($id);
        $cinema->delete();
        return redirect()->route('cinemas');
    }
}
