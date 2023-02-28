<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;
class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        

        if(Auth::guard('admin')->check()){

            return next($request);
        }
        return '/login';
    }

    public function handle($request, Closure $next,  ...$guards)
    {
        
        
         if ($request->expectsJson()) {
             
             if(strpos($request->url(), 'api') !== false){
                 if (!Auth::guard('api')->check()) {
                    return response()->json([
                        'message'=>'errors',
                        'errors' => (['errors'=>[trans('Unauthorized')]
                        ])
                    ], 401);
            // return response()->json(['message' => 'Unauthorized'], 401);
        }else{
          
            // dd(auth()->user());
            return $next($request);
        }
             }else{
                 if (Auth::guard('admin')->check()) {
            return $next($request);
        }
        return redirect('/login');
             }
        
         }
        if (Auth::guard('admin')->check()) {
            return $next($request);
        }
        return redirect('/login');
    }
}
