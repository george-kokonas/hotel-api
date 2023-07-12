<?php

use App\Http\Controllers\ClientController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/clients', [ClientController::class, 'getClients']);
Route::post('/clients/create', [ClientController::class, 'createClient']);
Route::delete('/clients/delete/{id}', [ClientController::class, 'deleteClient']);
