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

    $this->redirectIntended(default: route('selection', absolute: false), navigate: true);
};

?>

<div class="whole-page-container">
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form wire:submit="login" class="register-form">
        <!-- Email Address -->
        <div class="register-form-field">
            <x-input-label for="email" :value="__('Email')" class="register-form-label"/>
            <x-text-input wire:model="form.email" id="email" class="register-form-input" type="email" name="email" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('form.email')" class="register-form-label-error" />
        </div>

        <!-- Password -->
        <div class="register-form-field">
            <x-input-label for="password" :value="__('Password')" class="register-form-label"/>
            <x-text-input wire:model="form.password" id="password" class="register-form-input"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('form.password')" class="register-form-label-error" />
        </div>

        <!-- Remember Me -->
        <div class="login-form-checkbox-container">
            <label for="remember" class="login-form-checkbox-container">
                <input wire:model="form.remember" id="remember" type="checkbox" class="login-form-checkbox" name="remember">
                <span class="ms-2 text-sm text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="register-form-bottom">
            @if (Route::has('password.request'))
                <a class="" href="{{ route('password.request') }}" wire:navigate>
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="register-form-button">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</div>