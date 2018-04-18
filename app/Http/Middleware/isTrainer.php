<?php

namespace App\Http\Middleware;

use Closure;

class isTrainer
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
        if (!$request->user()->isTrainer()) {
            return redirect('/');
        }
        return $next($request);
    }
}
