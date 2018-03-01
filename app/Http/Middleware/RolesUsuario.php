<?php

namespace App\Http\Middleware;

use Closure;

class RolesUsuario
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
        //verificamos si el usuario es paciente si es ai le dirigimos a la pagina princiapl
        if (auth()->check() && auth()->user()->tipo_usuario=='paciente')
            return redirect('/');
        //si no es asi le dirigimos a la pagina por defecto
        return $next($request);
    }
}
