<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        try {
            $response = Http::post('http://localhost:8001/api/login', [
                'email' => $request->input('email'),
                'password' => $request->input('password'),
            ]);
            $responseData = $response->json();

            // Check if the API login was successful
            // Check if the API login was successful
            // Check if the API login was successful
            if ($response->successful()) {
                $userData = $responseData['data'];

                // Store the API token in cookies
                $minutes = config('session.lifetime');
                $token = $userData['token'];
                $cookie = cookie('api_token', $token, $minutes)->withDomain(config('session.domain'));

                // Redirect to the dashboard if the user is already authenticated
                if ($request->session()->has('api_token')) {
                    return redirect()->route('dashboard')->withCookie($cookie);
                }

                // Continue with the request
                return redirect('/login')->withCookie($cookie);
            } else {
                // Handle failed login
                return back()->withErrors(['message' => 'Invalid login credentials']);
            }
        } catch (\Throwable $th) {
            // Handle exceptions
            dd($th);
        }
    }



    
}