<?php

namespace App\Http\Middleware;

use Closure;
use App\Visitordata;
use Jenssegers\Agent\Agent;
use Auth;
use Cache;
class visitorpages
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
            $ip = request()->ip(); //Dynamic IP address get
            $agent = new Agent();
            $visitorinfo = new Visitordata;
            $visitorinfo->visitor_ip = $ip;
            $visitorinfo->browser = $agent->browser();
            $visitorinfo->language = json_encode($agent->languages());
            $visitorinfo->platform =  $agent->platform();
            $visitorinfo->save();

        return $next($request);
    }
}
