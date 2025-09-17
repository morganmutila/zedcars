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

<div>
    <h3 class="h4 pt-5 mt-n2 mt-md-0 mt-lg-2 mt-xl-3 mb-sm-4">Delete account</h3>
    <p class="fs-sm mb-sm-4">When you delete your account, your public profile will be deactivated
        immediately. If you change your mind before the 14 days are up, sign in with your email and
        password, and we'll send a link to reactivate account.</p>
    <div class="form-check mb-4">
        <x-text-input wire:model="agree" type="checkbox" id="confirm-deletion">
            Yes, I want to delete my account
        </x-text-input>
    </div>

    <x-danger-button type="button" data-bs-toggle="modal" data-bs-target="#confirm-user-deletion">Delete account
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
</div>
