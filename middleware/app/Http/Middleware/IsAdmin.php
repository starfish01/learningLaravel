<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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

        if($user == NULL){
            return redirect('/');
        }

        //This is what the course says to do but it doesnt work because $user is null
        //this works with different user types only admin can pass
        if(!$user->isAdmin()){

            return redirect('/');

        }

        return $next($request);
    }
}
