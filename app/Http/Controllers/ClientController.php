<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\client;


class ClientController extends Controller
{
    public function index() {
        $user = Auth::user(); // Get the authenticated user
    
        if ($user && $user->role == 'admin') { // Check if the user is authenticated and is an admin
            $clients = client::all(); // Fetch all clients
            $clientsPoints = client::pluck('points');
            $clientsNames= client::pluck('name');
        } else {    
            $clients = client::orderBy('points', 'asc')->take(5)->get(); // Fetch top 5 clients ordered by points
            $clientsPoints = client::orderBy('points', 'asc')->take(5)->pluck('points');
            $clientsNames= client::orderBy('points', 'asc')->take(5)->pluck('name');
        }
    
        return view('dashboard', ['clients' => $clients,'clientsPoints' => $clientsPoints ,'clientsNames' => $clientsNames]); // Return the view with clients data
    }
    
}
