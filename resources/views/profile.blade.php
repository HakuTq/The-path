@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <div class="profile-page-container">
        <div class="profile-header">
            <h2>{{ __('Profile') }}</h2>
        </div>

        <div class="profile-content">
            <div class="profile-section">
                <div class="profile-section-content">
                    <livewire:profile.update-profile-information-form />
                </div>
            </div>

            <div class="profile-section">
                <div class="profile-section-content">
                    <livewire:profile.update-password-form />
                </div>
            </div>

            <div class="profile-section">
                <div class="profile-section-content">
                    <livewire:profile.delete-user-form />
                </div>
            </div>
        </div>
    </div>
@endsection
