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
    public function handle(Request $request, Closure $next, $roles): Response
    {
        if (Auth::check()) {
            $roles = explode('-', $roles);
            foreach ($roles as $role) {
                $role = Roles::where('name', $role)->first();
                if ($role && Auth::user()->role_id == $role->id) {
                    return $next($request);
                }
            }
        }
        return redirect('/deny');
    }
}
