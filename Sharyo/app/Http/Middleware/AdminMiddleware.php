<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check())
        {
            if(Auth::user()->admin == '1')
            {
                return $next($request);
            }
            else
            {
                return redirect('/')->with('status', 'Acceso denegado, no estás registrado como administrador');
            }
        }
        else
        {
            return redirect()->back()->with('status', 'Registrate primero, por favor.');
        }
    }
}
