<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<x-slot:title>
    Login
</x-slot:title>

<div>

    <h1 class="h2 mt-auto">Welcome back</h1>
    <div class="nav fs-sm mb-4">
        Don't have an account?
        <a class="nav-link text-decoration-underline p-0 ms-2" href="{{ route('register') }}">Create an
            account</a>
    </div>

    <!-- Form -->
    <form class="{{ $errors->any() ? 'is-invalid' : '' }}" wire:submit.prevent="login" wire:loading.class="opacity-75">
        <!-- Email Address -->
        <div class="mb-3">
            <x-text-input wire:model="form.email" id="email" type="email" autocomplete="username" :placeholder="__('Email')"
                label="Email" :messages="$errors->get('form.email')" />
        </div>


        <div class="mb-3">
            <x-text-input wire:model="form.password" id="password" type="password" autocomplete="current-password"
                :placeholder="__('Password')" label="Password" :messages="$errors->get('form.password')" />
        </div>

        <div class="d-flex align-items-center justify-content-between mb-4">
            <div class="form-check me-2">
                <input wire:model="form.remember" type="checkbox" class="form-check-input" id="remember-30">
                <label for="remember-30" class="form-check-label">Remember for 30 days</label>
            </div>
            <div class="nav">
                @if (Route::has('password.request'))
                    <a class="nav-link animate-underline p-0" href="{{ route('password.request') }}" wire:navigate>
                        <span class="animate-target">Forgot password?</span>
                    </a>
                @endif
            </div>
        </div>

        <x-primary-button class="btn-lg w-100">
            {{ __('Sign In') }}
        </x-primary-button>

    </form>

</div>
