<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class isGuru
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!Auth::check()){
            return redirect()->route('login');
        }else{
            if(Auth::user()->id_role !== 2){
                echo "Kamu bukan guru!"; die;
            }else{
                Cache::put('user-is-online-'. Auth::user()->id, true);
                User::where('id', Auth::user()->id)->update(['last_seen' => now()]);
            }
        }

        
        return $next($request);
    }
}
