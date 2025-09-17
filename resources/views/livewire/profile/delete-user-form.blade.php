<?php

use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\Auth;
use Livewire\Volt\Component;

new class extends Component {
    public string $password = '';

    /**
     * Delete the currently authenticated user.
     */
    public function deleteUser(Logout $logout): void
    {
        $this->validate([
            'password' => ['required', 'string', 'current_password'],
        ]);

        tap(Auth::user(), $logout(...))->delete();

        $this->redirect('/', navigate: true);
    }
}; ?>

<x-slot:title>
    Delete account
</x-slot:title>

<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <x-danger-button data-bs-toggle="modal" data-bs-target="#confirm-user-deletion">{{ __('Delete Account') }}
    </x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->isNotEmpty()" focusable>
        <form wire:submit="deleteUser" class="p-6">

            <h4 class="text-lg font-medium text-gray-900">
                {{ __('Confirm account deletion?') }}
            </h4>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Deleting your account will permanently remove all associated data and resources. To confirm, please enter your password.') }}
            </p>

            <div class="position-relative my-3">

                <x-text-input wire:model="password" id="password" type="password" class="w-100"
                    placeholder="{{ __('Password') }}" :messages="$errors->get('password')" />

            </div>

            <div class="d-flex justify-content-end gap-2 align-items-center">
                <x-secondary-button data-bs-dismiss="modal">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button type="submit">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
