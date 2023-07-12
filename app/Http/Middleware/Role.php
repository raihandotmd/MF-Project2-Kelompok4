<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Role as Roles;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $roleName): Response
    {
        if (Auth::check()) {
            $role = Roles::where('name', $roleName)->first();
            if ($role && Auth::user()->role_id == $role->id) {
                return $next($request);
            }
        }
        return redirect('/deny');
    }
}
