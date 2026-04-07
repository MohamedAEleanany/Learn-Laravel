<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckIfNameIsAhmed
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->input('name') == 'ahmed')
            {
                return $next($request);
            }
            else{
                abort(403);
            }
        
    }
}
