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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = users::find($id);
        $users->delete();
        if ($users) {
            return redirect()->route('users');
        }
        return back();
    }
}
