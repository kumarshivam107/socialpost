<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class employee
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
        $id_type = Auth::user()->id_type;
        if($id_type !=2){
            return redirect('/blank');
        }
        return $next($request);
    }
}
