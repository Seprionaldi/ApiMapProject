<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function store(Request $request)
    {
        $location = Location::create($request->all());

        return response()->json(['message' => 'Location saved successfully', 'data' => $location]);
    }

    public function index()
    {
        // Mengambil semua data lokasi dari tabel locations
        $locations = Location::all();
    
        // Mengirimkan data sebagai respons JSON
        return response()->json(['message' => 'Locations retrieved successfully', 'data' => $locations]);
    }
    
}
