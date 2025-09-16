<?php

use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    public string $email = '';

    /**
     * Send a password reset link to the provided email address.
     */
    public function sendPasswordResetLink(): void
    {
        $this->validate([
            'email' => ['required', 'string', 'email'],
        ]);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $status = Password::sendResetLink($this->only('email'));

        if ($status != Password::RESET_LINK_SENT) {
            $this->addError('email', __($status));

            return;
        }

        $this->reset('email');

        session()->flash('status', __($status));
    }
}; ?>

<x-slot:title>
    Forgot Password
</x-slot:title>

<div class="mt-md-5">
    <!-- Session Status -->
    <x-auth-session-status class="mb-3" :status="session('status')" />
    <h1 class="h2 mt-auto">Forgot password?</h1>
    <p class="pb-2 pb-md-3">Enter the email address you used when you joined and we'll send you instructions to reset
        your
        password</p>

    <form class="{{ $errors->any() ? 'is-invalid' : '' }}" wire:submit.prevent="sendPasswordResetLink">
        <!-- Email Address -->
        <div class="mb-3 position-relative">
            <x-text-input wire:model="email" id="email" type="email" :messages="$errors->get('email')" placeholder="Email Address"
                icon="fi-mail" :with-icon="true" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="btn-lg w-100" type="submit">
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</div>
