<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {

        // Check if the API token is present in cookies
        if ($request->hasCookie('api_token')) {
            // Access the authenticated user's data using cookies
            $apiToken = $request->cookie('api_token');
            // Add any other logic specific to your dashboard

            return view('dashboard');
        } else {
            // Debugging: Dump a message if the token is not present
            dd('Token not present in cookies');

            // Redirect to the login page if the token is not present
            return redirect()->route('login');
        }
    }



}
