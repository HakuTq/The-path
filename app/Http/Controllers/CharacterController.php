<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CharacterController extends Controller
{
    public function show(Character $character): RedirectResponse|View
    {
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
