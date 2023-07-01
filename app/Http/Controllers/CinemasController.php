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
        $validated = $request->validate([
            'code' => 'required|unique:cinemas|max:3',
        ]);

        $cinemas->create($validated);
        if ($cinemas) {
            return redirect()->route('cinemas');
        }
        return back();
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
        $validated = $request->validate([
            'code' => 'required|unique:cinemas|max:3',
        ]);

        $cinemas = Cinemas::find($request->idedit);
        $cinemas->update($validated);
        
        if ($cinemas) {
            return redirect()->route('cinemas');
        }
        return back();
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
