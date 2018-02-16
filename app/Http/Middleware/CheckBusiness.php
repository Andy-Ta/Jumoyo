<?php

namespace App\Http\Middleware;

use Closure;
use DB;

class CheckBusiness
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
        if(!$this->check(session()->get('id'))) {
            return redirect('/business/register');
        }

        return $next($request);
    }

    public function check($id) {
        if(empty(DB::table('businesses')->where('client', $id)->first())) {
            return false;
        }
        else {
            return true;
        }
    }
}
