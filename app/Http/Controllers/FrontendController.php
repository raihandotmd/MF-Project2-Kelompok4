<?php

namespace App\Http\Controllers;

use App\Models\MovieOrder;
use App\Models\MovieSchedule;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = MovieSchedule::take(8)->get();

        return view('frontend.index', compact('movies'));
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
    public function ticketUser(MovieOrder $movieOrder)
    {

        $movieOrder = MovieOrder::where('user_id', auth()->user()->id)->get();

        return view('frontend.user_tickets', compact('movieOrder'));
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
