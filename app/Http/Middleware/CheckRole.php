<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
   // In CheckRole.php
public function handle($request, Closure $next, $role)
{
    if (auth()->user()->role !== $role) {
        return redirect('/');
    }
    return $next($request);
}
public function showTeens()
{
    $teens = User::where('role', 'teen')->get();
    return view('users.teen', compact('teens'));
}
public function showAdmins()
{
    $admins = User::where('role', 'admin')->get();
    return view('users.admin', compact('admins'));
}
public function showParents()
{
    $parents = User::where('role', 'parent')->get();
    return view('users.parent', compact('parents'));
}
}
