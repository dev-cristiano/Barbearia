<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserHasEnterprise
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $enterprise = $request->user()->enterprise;

        if(!$enterprise){
            return redirect()->route('enterprises.create')
                ->with('error', 'You need to register a company before accessing the system.');
        }

        return $next($request);
    }
}
