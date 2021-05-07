<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use Session;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->role != "admin"){
            Session::flash('gagaladmin', 'maaf anda bukan role admin. silakan login dengan role admin untuk mengakses halaman ini. terimakasih atas kerjasamanya');
            return redirect()->to('home');
        }
        return $next($request);
    }
}
