<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class typechecker
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
            return redirect('error');
        }
        else{
            $user_type= Auth::user()->id_type;
            if($user_type == 1){
                return redirect('/affiliate/home');
            }
            elseif($user_type == 2){
                return redirect('/employee/home');
            }
        }
        
        return $next($request);
    }
}
