<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movieOrder;
Use DB;

class MovieOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movieOrders = DB::table('movie_order')
            ->join('users', 'movie_order.user_id', '=', 'users.id')
            ->select('movie_order.*', 'users.name as name_movie')
            ->get();
    
        return view('admin.MovieOrder.MovieOrder', compact('movieOrders'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $movieOrders = DB ::table('movie_order')->get();
        $users = DB ::table('users')->get(); 

        return view ('admin.MovieOrder.create', compact('users','movieOrder'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $movieOrders = new movieOrder;
        $movieOrders->movie_schedule = $request->movie_schedule;
        $movieOrders->user_id = $request->user_id;
        $movieOrders->seat = $request->seat;
        $movieOrders->ticket_code = $request->ticket_code;
        $movieOrders->save();
        return redirect('MovieOrder');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
