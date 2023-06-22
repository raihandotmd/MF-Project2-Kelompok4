<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usersRoles   ;
Use DB;


class usersRolescontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
         $usersRoles = DB:: table ('users_roles')->get();
        
        
        //untuk mengarahkan ke file pesana
        return view('admin.users_roles.usersRoles', compact('usersRoles'));
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
