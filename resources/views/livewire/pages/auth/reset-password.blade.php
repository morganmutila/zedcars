<?php

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    #[Locked]
    public string $token = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Mount the component.
     */
    public function mount(string $token): void
    {
        $this->token = $token;

        $this->email = request()->string('email');
    }

    /**
     * Reset the password for the given user.
     */
    public function resetPassword(): void
    {
        $this->validate([
            'token' => ['required'],
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.
        $status = Password::reset($this->only('email', 'password', 'password_confirmation', 'token'), function ($user) {
            $user
                ->forceFill([
                    'password' => Hash::make($this->password),
                    'remember_token' => Str::random(60),
                ])
                ->save();

            event(new PasswordReset($user));
        });

        // If the password was successfully reset, we will redirect the user back to
        // the application's home authenticated view. If there is an error we can
        // redirect them back to where they came from with their error message.
        if ($status != Password::PASSWORD_RESET) {
            $this->addError('email', __($status));

            return;
        }

        Session::flash('status', __($status));

        $this->redirectRoute('login', navigate: true);
    }
}; ?>
<x-slot:title>
    Reset Password - {{ config('app.name') }}
</x-slot:title>

<div>
    <h1 class="h2 mt-auto">Reset password?</h1>
    <p class="pb-2 pb-md-3">Enter a new password to reset your password</p>
    <form wire:submit="resetPassword">
        <!-- Email Address -->
        <div class="mb-3">
            <x-text-input label="Email" wire:model="email" id="email" type="email" required autofocus
                autocomplete="username" :messages="$errors->get('email')" placeholder="Email" />
        </div>

        <!-- Password -->
        <div class="mb-3">
            <x-text-input label="New Password" wire:model="password" id="password" type="password" name="password"
                required placeholder="Enter new password" :messages="$errors->get('password')" />
        </div>

        <!-- Confirm Password -->
        <div class="mb-4">

            <x-text-input label="Confirm New Password" wire:model="password_confirmation" id="password_confirmation"
                class="block mt-1 w-full" type="password" name="password_confirmation" required
                placeholder="Confirm new password" />
        </div>

        <div class="mb-3">
            <x-primary-button class="btn-lg w-100" type="submit">
                {{ __('Reset Password') }}
            </x-primary-button>

        </div>
    </form>
</div>
