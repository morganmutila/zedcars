<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered(($user = User::create($validated))));

        Auth::login($user);

        $this->redirect(route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<x-slot:title>
    Register
</x-slot:title>

<div>
    <h1 class="h2 mt-auto">Create an account</h1>
    <div class="nav fs-sm mb-3 mb-lg-4">
        I already have an account
        <a class="nav-link text-decoration-underline p-0 ms-2" wire:navigate href="{{ route('login') }}">Sign in</a>
    </div>

    <form class="{{ $errors->any() ? 'is-invalid' : '' }}" wire:submit.prevent="register" wire:loading.class="opacity-75">
        <!-- Name -->
        <div class="mb-3">
            <x-text-input wire:model="name" label="Name" type="text" autocomplete="name" :placeholder="__('Full Name')"
                :messages="$errors->get('name')" />
        </div>

        <!-- Email Address -->
        <div class="mb-3">
            <x-text-input wire:model="email" label="Email" type="email" autocomplete="username" :placeholder="__('Minimum 8 characters')"
                :messages="$errors->get('email')" />
        </div>

        <!-- Password -->
        <div class="mb-3">
            <x-text-input wire:model="password" label="Password" type="password" autocomplete="current-password"
                :placeholder="__('New Password')" :messages="$errors->get('password')" />
        </div>


        <!-- Confirm Password -->
        <!-- Password -->
        <div class="mb-3">
            <x-text-input wire:model="password_confirmation" type="password" autocomplete="current-password"
                label="Confirm Password" :placeholder="__('Confirm New Password')" />
        </div>


        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="btn-lg w-100" type="submit">
                {{ __('Create an account') }}
            </x-primary-button>
        </div>
    </form>
</div>
