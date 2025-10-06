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

class CustomSessionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        $userData = User::getCurrentUser();
        // dd($userData);
        if($userData){

            View::share('userData',$userData);

        } else{
            
            View::share('userData',False);

        }

        $userAgent = $_SERVER['HTTP_USER_AGENT'];

        $sports = ["Cricket","Football","Tennis"];

        $providers = Storage::disk('local')->get('games_data/providers.json');
        
        $providers = json_decode($providers);
        
        $domain = $request->host();

        
        
        View::share('sports',$sports);
        View::share('providers',$providers);

        return $next($request);
    }
}
