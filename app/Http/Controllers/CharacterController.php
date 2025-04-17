<?php

namespace App\Http\Controllers;

use App\Enums\ClassEnum;
use App\Models\Character;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class CharacterController extends Controller
{
    public function index(): View
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

    public function store(Request $request) #: RedirectResponse|View
    {
        $class = ClassEnum::tryFrom($request->class);
        $character = $request->character;

        # Needs checking if right syntax
        #if($class === null) redirect()->back()->withErrors("Class Doesnt exist");
        //Create a whole new CharacterClass for Character           
    }

    public function update(Request $request, Character $character)
    {
        if ($character->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        //Only update level
        $character = Auth::user()->characters[$character];

        # IDK if this will save into DB
        #$character->characterClasses[$class]->level++;
    }

    public function destroy($id) {}
}
