<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;
use Livewire\Volt\Component;

new class extends Component {
    public string $current_password = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Update the password for the currently authenticated user.
     */
    public function updatePassword(): void
    {
        try {
            $validated = $this->validate([
                'current_password' => ['required', 'string', 'current_password'],
                'password' => ['required', 'string', Password::defaults(), 'confirmed'],
            ]);
        } catch (ValidationException $e) {
            $this->reset('current_password', 'password', 'password_confirmation');

            throw $e;
        }

        Auth::user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        $this->reset('current_password', 'password', 'password_confirmation');

        $this->dispatch('password-updated');
    }
}; ?>

<section>
    <h3 class="h4 pt-5 mt-md-3 mb-sm-4">{{ __('Update Password') }}</h3>

    <p class="mt-1 text-sm text-gray-600">
        {{ __('Ensure your account is using a long, random password to stay secure.') }}
    </p>

    <form class="{{ $errors->any() ? 'is-invalid' : '' }}" wire:submit="updatePassword">

        <div class="row row-cols-1 row-cols-sm-2 g-4 mb-4">
            <div class="col">
                <div class="mb-3">
                    <x-text-input :label="__('Current Password')" wire:model="current_password" id="update_password_current_password"
                        name="current_password" type="password" autocomplete="current-password" :messages="$errors->get('current_password')" />
                </div>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-sm-2 g-4 mb-4">
            <div class="col">
                <div class="mb-3">
                    <x-text-input :label="__('New Password')" wire:model="password" id="update_password_password" name="password"
                        type="password" :messages="$errors->get('password')" />
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <x-text-input :label="__('Confirm Password')" wire:model="password_confirmation"
                        id="update_password_password_confirmation" name="password_confirmation" type="password"
                        :messages="$errors->get('password_confirmation')" />
                </div>
            </div>
        </div>

        <div class="d-flex align-items-center gap-3">
            <button type="submit" class="btn btn-lg btn-dark">Update password</button>

            <button type="reset" class="btn btn-lg btn-secondary">Cancel</button>

            <x-action-message on="password-updated">
                New password saved.
            </x-action-message>
        </div>
    </form>
</section>
