<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class checklog
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
        // dd($request->input());
        if(Auth::user([
            'email' => $email,
            'password' => $password
        ])){
            return $next($request);
        }
        else{
            return redirect()->route('login');
        }
        
    }
    // protected function redirectTo($request)
    // {
    //     if (! $request->expectsJson()) {
    //         return route('login');
    //     }
    // }
    // public function handle(Request $request, Closure $next){
    //     if(Auth::user(
        
    //     return $next($request);

    // }
}
