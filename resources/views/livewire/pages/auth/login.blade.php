<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;

use function Livewire\Volt\form;
use function Livewire\Volt\layout;

layout('layouts.guest');

form(LoginForm::class);

$login = function () {
    $this->validate();

    $this->form->authenticate();

    Session::regenerate();

    $this->redirectIntended(default: route('characters.index', absolute: false), navigate: true);
};

?>

<div class="min-h-screen flex items-center justify-center px-4 py-12" style="background-color: #0f110f;">
    <div class="w-full max-w-md">
        <!-- Header -->
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-white mb-2" style="font-family: 'Libre Baskerville', serif;">Welcome Back</h2>
            <p class="text-gray-400">Sign in to continue your adventure</p>
        </div>

        <!-- Form Card -->
        <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-8 shadow-2xl border border-white/10 hover:bg-white/[0.07] transition-all duration-300">
            <form wire:submit="login" class="space-y-6">
                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="block text-sm font-medium text-gray-300 mb-2"/>
                    <x-text-input 
                        wire:model="form.email" 
                        id="email" 
                        class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#8AB0AB] focus:border-transparent transition-all duration-300" 
                        type="email" 
                        name="email" 
                        required 
                        autofocus 
                        autocomplete="username"
                        placeholder="your.email@example.com"
                    />
                    <x-input-error :messages="$errors->get('form.email')" class="mt-2 text-sm text-red-400" />
                </div>

                <!-- Password -->
                <div>
                    <x-input-label for="password" :value="__('Password')" class="block text-sm font-medium text-gray-300 mb-2"/>
                    <x-text-input 
                        wire:model="form.password" 
                        id="password" 
                        class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#8AB0AB] focus:border-transparent transition-all duration-300"
                        type="password"
                        name="password"
                        required 
                        autocomplete="current-password"
                        placeholder="Enter your password"
                    />
                    <x-input-error :messages="$errors->get('form.password')" class="mt-2 text-sm text-red-400" />
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between">
                    <label for="remember" class="flex items-center cursor-pointer group">
                        <input 
                            wire:model="form.remember" 
                            id="remember" 
                            type="checkbox" 
                            class="w-4 h-4 rounded border-white/20 bg-white/10 text-[#8AB0AB] focus:ring-2 focus:ring-[#8AB0AB] focus:ring-offset-0 transition-colors cursor-pointer" 
                            name="remember"
                        >
                        <span class="ml-2 text-sm text-gray-400 group-hover:text-gray-300 transition-colors">{{ __('Remember me') }}</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a 
                            class="text-sm font-medium hover:underline transition-colors duration-300" 
                            style="color: #8AB0AB;" 
                            href="{{ route('password.request') }}" 
                            wire:navigate
                        >
                            {{ __('Forgot password?') }}
                        </a>
                    @endif
                </div>

                <!-- Submit Button -->
                <div class="pt-2">
                    <x-primary-button class="w-full py-3 px-4 rounded-lg font-semibold text-white transition-all duration-300 shadow-lg hover:shadow-xl" style="background-color: #8AB0AB;">
                        {{ __('Sign In') }}
                    </x-primary-button>
                </div>

                <!-- Register Link -->
                <div class="text-center pt-4">
                    <p class="text-gray-400 text-sm">
                        Don't have an account? 
                        <a class="ml-1 font-semibold hover:underline transition-colors duration-300" style="color: #8AB0AB;" href="{{ route('register') }}" wire:navigate>
                            {{ __('Create one') }}
                        </a>
                    </p>
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mt-4 text-sm text-green-400 text-center" :status="session('status')" />
            </form>
        </div>

        <!-- Additional Info -->
        <p class="text-center text-gray-500 text-xs mt-6">
            Secure login protected by industry-standard encryption
        </p>
    </div>
</div>