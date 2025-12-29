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

    $this->redirect(route('characters.index', absolute: false), navigate: true);
};

?>

<div class="min-h-screen flex items-center justify-center px-4 py-12" style="background-color: #0f110f;">
    <div class="w-full max-w-md">
        <!-- Header -->
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-white mb-2" style="font-family: 'Libre Baskerville', serif;">Create Account</h2>
            <p class="text-gray-400">Join us and start your adventure</p>
        </div>

        <!-- Form Card -->
        <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-8 shadow-2xl border border-white/10 hover:bg-white/[0.07] transition-all duration-300">
            <form wire:submit="register" class="space-y-6">
                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" class="block text-sm font-medium text-gray-300 mb-2"/>
                    <x-text-input 
                        wire:model="name" 
                        id="name" 
                        class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#8AB0AB] focus:border-transparent transition-all duration-300" 
                        type="text" 
                        name="name" 
                        required 
                        autofocus 
                        autocomplete="name"
                        placeholder="Enter your name" 
                    />
                    <x-input-error :messages="$errors->get('name')" class="mt-2 text-sm text-red-400" />
                </div>

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="block text-sm font-medium text-gray-300 mb-2"/>
                    <x-text-input 
                        wire:model="email" 
                        id="email" 
                        class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#8AB0AB] focus:border-transparent transition-all duration-300" 
                        type="email" 
                        name="email" 
                        required 
                        autocomplete="username"
                        placeholder="your.email@example.com" 
                    />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-400" />
                </div>

                <!-- Password -->
                <div>
                    <x-input-label for="password" :value="__('Password')" class="block text-sm font-medium text-gray-300 mb-2"/>
                    <x-text-input 
                        wire:model="password" 
                        id="password" 
                        class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#8AB0AB] focus:border-transparent transition-all duration-300"
                        type="password"
                        name="password"
                        required 
                        autocomplete="new-password"
                        placeholder="Create a strong password" 
                    />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-400" />
                </div>

                <!-- Confirm Password -->
                <div>
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="block text-sm font-medium text-gray-300 mb-2"/>
                    <x-text-input 
                        wire:model="password_confirmation" 
                        id="password_confirmation" 
                        class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#8AB0AB] focus:border-transparent transition-all duration-300"
                        type="password"
                        name="password_confirmation" 
                        required 
                        autocomplete="new-password"
                        placeholder="Confirm your password" 
                    />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-sm text-red-400" />
                </div>

                <!-- Submit Button -->
                <div class="pt-2">
                    <x-primary-button class="w-full py-3 px-4 rounded-lg font-semibold text-white transition-all duration-300 shadow-lg hover:shadow-xl" style="background-color: #8AB0AB; hover:background-color: #7a9d99;">
                        {{ __('Create Account') }}
                    </x-primary-button>
                </div>

                <!-- Already Registered Link -->
                <div class="text-center pt-4">
                    <p class="text-gray-400 text-sm">
                        Already have an account? 
                        <a class="ml-1 font-semibold hover:underline transition-colors duration-300" style="color: #8AB0AB;" href="{{ route('login') }}" wire:navigate>
                            {{ __('Sign in') }}
                        </a>
                    </p>
                </div>
            </form>
        </div>

        <!-- Additional Info -->
        <p class="text-center text-gray-500 text-xs mt-6">
            By registering, you agree to our Terms of Service and Privacy Policy
        </p>
    </div>
</div>