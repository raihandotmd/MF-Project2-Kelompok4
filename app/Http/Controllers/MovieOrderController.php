<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movieOrder;
use Illuminate\Support\Facades\DB;

class MovieOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies_order = DB::table('movie_order')
            ->join('users', 'movie_order.user_id', '=', 'users.id')
            ->select('movie_order.*', 'users.name as name_movie')
            ->get();
        return view('admin.movies_order.index', compact('movies_order'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $movies_schedule = DB::table('movie_schedule')->get();
        $users = DB ::table('users')->get(); 

        return view ('admin.movies_order.form', compact('users','movies_schedule'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, movieOrder $movieOrder)
    {
        
        $validated = $request->validate([
            'movie_schedule' => 'required',
            'user_id' => 'required',
            'seat' => 'required|max:3',
            'ticket_code' => 'required|max:13',
        ]);

        $movieOrder->create($validated);
        if ($movieOrder) {
            return redirect()->route('movie_order');
        }
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $movie_order = movieOrder::find($id);
        $movies_schedule = DB::table('movie_schedule')->get();
        $users = DB ::table('users')->get(); 

        return view('admin.movies_order.form_edit', compact('movie_order','users','movies_schedule'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id, movieOrder $movie_order)
    {
        $validated = $request->validate([
            'movie_schedule' => 'required',
            'user_id' => 'required',
            'seat' => 'required|max:3',
            'ticket_code' => 'required|max:13',
        ]);
        $movie_order = movieOrder::find($id);
        $movie_order->update($validated);
        if ($movie_order) {
            return redirect()->route('movie_order');
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $movieOrder = movieOrder::find($id);
        $movieOrder->delete();
        return redirect()->route('movie_order')->with('success', 'Data berhasil dihapus');
    }
}
