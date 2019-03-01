<?php

namespace App\Http\Middleware;

use Closure;

class ApiAuth
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
      if (empty($request->header('authorization')))
      {
        return response()->json([
          'error' => 'manca authorization'
        ]);
      }

      $apiKey = config('app.api_key');


      if ($request->header('authorization') != $apiKey)
      {
        return response()->json([
          'error' => 'manca authorization'
        ]);
      }
        return $next($request);
    }
}
