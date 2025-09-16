<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    public string $password = '';

    /**
     * Confirm the current user's password.
     */
    public function confirmPassword(): void
    {
        $this->validate([
            'password' => ['required', 'string'],
        ]);

        if (
            !Auth::guard('web')->validate([
                'email' => Auth::user()->email,
                'password' => $this->password,
            ])
        ) {
            throw ValidationException::withMessages([
                'password' => __('auth.password'),
            ]);
        }

        session(['auth.password_confirmed_at' => time()]);

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<x-slot:title>
    Confirm Password
</x-slot:title>

<div>
    <div class="mb-4 fs-sm text-secondary">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form wire:submit="confirmPassword" class="{{ $errors->any() ? 'is-invalid' : '' }}">
        <!-- Password -->
        <div class="mb-4">

            <x-text-input wire:model="password" id="password" label="Password" class="block mt-1 w-full" type="password"
                name="password" required autocomplete="current-password" :messages="$errors->get('password')" />
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button class="btn-lg w-100" type="submit">
                {{ __('Confirm') }}
            </x-primary-button>
        </div>
    </form>
</div>
