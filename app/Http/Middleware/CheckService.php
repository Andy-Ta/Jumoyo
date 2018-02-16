<?php

namespace App\Http\Middleware;

use Closure;
use DB;

class CheckService
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        if(!$this->check(session()->get('id'))) {
            return redirect('/business/myservices');
        }

        return $next($request);
    }

    public function check($id) {
        //dd(DB::table('services')->where('id', $id)->value('business'));
        if (DB::table('services')->where('id', $id)->value('business') != session()->get('businessid')) {
            return false;
        } else {
            return true;
        }
    }
}
