<?php

namespace App\Http\Controllers;

use App\Models\ShareData;
use Illuminate\Http\Request; // Corrected import

class ShareDataController extends Controller
{
    public function find($id)
    {
        try {
            $date = ShareData::findOrFail($id);

            return response()->json($date->data);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Resource not found'], 404);
        }
    }

    public function store(Request $request) // Corrected type hint
    {
        $data = $request->validate([
            'data' => 'required',
        ]);

        try {
            $shareData = ShareData::create($data);

            return response()->json(['id' => $shareData->id], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Resource not created'], 400);
        }
    }
}
