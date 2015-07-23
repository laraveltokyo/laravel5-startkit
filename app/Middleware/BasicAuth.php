<?php

namespace App\Http\Middleware;

use Closure;

class BasicAuth
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
        if ($request->getUser() != env('AUTH_BASIC_USER') || $request->getPassword() != env('AUTH_BASIC_PASS')) {
            $headers = ['WWW-Authenticate' => 'Basic'];

            return response('Invalid credentials.', 401, $headers);
        }

        return $next($request);
    }
}
