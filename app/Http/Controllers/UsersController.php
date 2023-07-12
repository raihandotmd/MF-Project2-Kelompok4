<?php

namespace App\Http\Controllers;

use App\Models\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        {
            $users = User::with('role')->get();
        
            return view('admin.users.index', compact('users'));
        }
    }


}
