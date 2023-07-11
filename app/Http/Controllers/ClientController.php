<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();

        return response()->json($clients);
    }
    
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'city' => 'required',
            'country' => 'required',
        ]);

        // Create a new client instance with the validated data
        $client = Client::create($validatedData);

        // Return a response indicating success
        return response()->json([
            'message' => 'Client created successfully',
            'client' => $client,
        ], 201);
    }
}
