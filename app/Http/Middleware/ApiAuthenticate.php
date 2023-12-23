<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
         // Check if the 'api_token' cookie is present
    if ($request->hasCookie('api_token')) {
        // Retrieve the value of the 'api_token' cookie
        $apiToken = $request->cookie('api_token');

        // You can now use $apiToken as needed, e.g., store it in the session
        $request->session()->put('api_token', $apiToken);

        // Continue with the request
        return $next($request);
    }

    // If 'api_token' cookie is not present, handle the logic accordingly
    return redirect('/login'); // Redirect to login page or perform other actions
    }
}
