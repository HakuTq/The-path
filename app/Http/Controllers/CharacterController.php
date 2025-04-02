<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class CharacterController extends Controller
{
    public function index()
    {
        $characters = Auth::user()->characters;

        return view('characters.selection', [
            'characters' => $characters,
        ]);
    }

    public function show(Character $character): RedirectResponse|View
    {
        if ($character->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        if (!$character) {
            return redirect()->back()->withInput()->withErrors([
                'character' => 'Character not found.',
            ]);
        }

        return view('characters.show', [
            'character' => $character,
        ]);
    }

    public function store(Request $request)
    {
    }

    public function destroy($id)
    {
    }
}
