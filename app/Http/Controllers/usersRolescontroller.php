<?php

namespace App\Http\Controllers;

use App\Models\UsersRoles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersRolesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $user_roles = DB::table('users_roles')->get();

        //untuk mengarahkan ke file pesana
        return view('admin.users_roles.index', compact('user_roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users_roles.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, UsersRoles $user_roles)
    {
        $validated = $request->validate([
            'name' => 'required|unique:users_roles|max:255',
        ]);

        $user_roles->create($validated);

        if ($user_roles) {
            return redirect()->route('users_roles')->with('success', 'User Role created successfully');
        }

        return back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $user_roles = UsersRoles::find($id);

        return view('admin.users_roles.form_edit', compact('user_roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UsersRoles $user_roles)
    {
        $validated = $request->validate([
            'name' => 'required|unique:users_roles|max:255',
        ]);

        $user_roles = UsersRoles::find($request->idedit);
        $user_roles->update($validated);
        if ($user_roles) {
            return redirect()->route('users_roles')->with('success', 'User Role updated successfully');
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user_roles = UsersRoles::find($id);
        $user_roles->delete();

        if ($user_roles) {
            return redirect()->route('users_roles')->with('success', 'User Role deleted successfully');
        }

        return back();
    }
}
