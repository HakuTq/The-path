<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function show($id)
    {
        // Fetch the character by ID
        $character = Character::find($id);

        // Check if the character exists
        if (!$character) {
            return response()->json(['message' => 'Character not found'], 404);
        }

        // Return the character details
        return response()->json($character);
    }

    public function store(Request $request)
    {
    }

    public function destroy($id)
    {
    }
}
