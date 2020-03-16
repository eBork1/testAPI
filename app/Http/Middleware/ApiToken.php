<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;

class ApiToken
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user_token = $request->header('api_token');

        $exists = DB::table('oauth_access_tokens')->where('id', $user_token)->first();
        if (!$exists) {
            return response()->json('Unauthorized - 401', 401);
        }
        return $next($request);
    }
}

