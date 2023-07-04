<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
Use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        {
            $users = DB::table('Users')
            ->join('users_roles', 'users.role_id', '=','role_id')
            ->select('users.*', 'users_roles.name as name_role')
            ->get();

        
            return view('admin.users.index', compact('users'));
        }
    }


}
