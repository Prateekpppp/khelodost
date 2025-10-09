<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Appdata;

class CustomAdminSessionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $userData='';
        if(Session::has('admin_username')){
            $userData = Session::get('admin_username');
            $userData = User::join('countries','countries.country_phone_code','=','users.country_phone_code')
        ->select('users.*','countries.currency')
        ->first();      
        } 
        
        View::share('userData',$userData);

        return $next($request);
    }
}
