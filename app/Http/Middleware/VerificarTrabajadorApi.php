<?php

namespace App\Http\Middleware;

use Closure;

class VerificarTrabajadorApi
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
         if($request->user()->tipo != "Trabajador")
         {
            return redirect()->route('api.soloTrabajadores');
            
         }
        return $next($request);
    }
}
