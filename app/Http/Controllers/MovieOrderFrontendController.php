<?php

namespace App\Http\Controllers;

use App\Models\Cinemas;
use App\Models\MovieOrder;
use App\Models\MovieSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MovieOrderFrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request, MovieOrder $movieOrder)
    {
        $movieOrder['movie_schedule'] = $request->movie_schedule;
        $movieOrder['user_id'] = auth()->user()->id;
        $movieOrder['seat'] = $request->seat;
        $movieOrder['ticket_code'] = Str::random(13);
        $movieOrder->save();

        $ticketCode = $movieOrder['ticket_code'];
        if ($movieOrder) {
            return redirect()->route('movie.order.success')->with('ticketCode', $ticketCode);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, string $cinema_id)
    {
        $cinema = Cinemas::find($cinema_id);
        $movie = MovieSchedule::find($id);
        $seats = $cinema->seats()->get();

        return view('frontend.cinema', compact('cinema', 'seats', 'movie'));
    }

    public function success(Request $request)
    {
        if (! $request->session()->has('ticketCode')) {
            return redirect()->route('frontend');
        }

        return view('frontend.success_order');
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
