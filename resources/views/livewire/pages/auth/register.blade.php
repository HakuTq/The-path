<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

use function Livewire\Volt\layout;
use function Livewire\Volt\rules;
use function Livewire\Volt\state;

layout('layouts.guest');

state([
    'name' => '',
    'email' => '',
    'password' => '',
    'password_confirmation' => ''
]);

rules([
    'name' => ['required', 'string', 'max:255'],
    'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
    'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
]);

$register = function () {
    $validated = $this->validate();

    $validated['password'] = Hash::make($validated['password']);

    event(new Registered($user = User::create($validated)));

    Auth::login($user);

    $this->redirect(route('dashboard', absolute: false), navigate: true);
};

?>

<div class="whole-page-container">
    <form wire:submit="register" class="register-form">
        <!-- Name -->
        <div class="register-form-field">
            <x-input-label for="name" :value="__('Name')" class="register-form-label"/>
            <x-text-input wire:model="name" id="name" class="register-form-input" type="text" name="name" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="register-form-label-error" />
        </div>

        <!-- Email Address -->
        <div class="register-form-field">
            <x-input-label for="email" :value="__('Email')" class="register-form-label"/>
            <x-text-input wire:model="email" id="email" class="register-form-input" type="email" name="email" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="register-form-label-error" />
        </div>

        <!-- Password -->
        <div class="register-form-field">
            <x-input-label for="password" :value="__('Password')" class="register-form-label"/>

            <x-text-input wire:model="password" id="password" class="register-form-input"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="register-form-label-error" />
        </div>

        <!-- Confirm Password -->
        <div class="register-form-field">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="register-form-label"/>

            <x-text-input wire:model="password_confirmation" id="password_confirmation" class="register-form-input"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="register-form-label-error" />
        </div>

        <div class="register-form-bottom">
            <a class="" href="{{ route('login') }}" wire:navigate>
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="register-form-button">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</div>
