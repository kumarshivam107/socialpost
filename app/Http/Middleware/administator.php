<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class administator
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
        $is_approve = Auth::user()->is_approve;
        if($is_approve==0){
            return redirect('/error');
        }
        else{
            $id_type = Auth::user()->id_type;
            if($id_type !=0){
                return redirect('/blank');
            }
        }
        return $next($request);
    }
}
