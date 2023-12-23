<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve the token from the cookie
        $token = request()->cookie('api_token');
    
        // Make an HTTP request to the third-party API with the token in the headers
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->get('http://localhost:8001/api/users');
    
        $users = $response->json();
        return view('users.index', compact('users'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Retrieve the token from the cookie
        $token = request()->cookie('api_token');
        dd($request->all());
        // Make an HTTP request to the third-party API with the token in the headers
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->post('http://localhost:8001/api/users', $request->all());
        // Check if the API request was successful
        if ($response->successful()) {
            // User created successfully
            return redirect()->route('users.index')->with('success', 'User created successfully');
        } else {
            // Handle the case where API request was not successful
            return back()->withErrors(['message' => 'Failed to create user']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
