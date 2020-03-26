<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        if($user){
            switch($user->roles){
                case null:
                    return redirect()->route('blogs.index');
                    break;
                case 'admin':
                    return redirect()->route('sendcomplaints.index');
                    break;
                case 'bagian':
                    return redirect()->route('bagian.index');
                    break;
                case 'atasan':
                    return redirect()->route('atasan.index');
                    break;
            }
        }
        return $next($request);
    }
}
