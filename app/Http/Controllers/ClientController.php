<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //Get all clients
    public function index()
    {
        $clients = Client::all();

        return response()->json($clients);
    }

    // Create a new client 
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

        //Validated data
        $client = Client::create($validatedData);

        // Return a response indicating success
        return response()->json([
            'message' => 'Client created successfully',
            'client' => $client,
        ], 201);
    }

    //Delete a client by id
    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();

        return response()->json([
            'message' => 'Client deleted successfully',
        ], 200);
    }
}
