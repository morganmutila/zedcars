<?php

use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    /**
     * Send an email verification notification to the user.
     */
    public function sendVerification(): void
    {
        if (Auth::user()->hasVerifiedEmail()) {
            $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);

            return;
        }

        Auth::user()->sendEmailVerificationNotification();

        Session::flash('status', 'verification-link-sent');
    }

    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<x-slot:title>
    Verify Email
</x-slot:title>

<div>
    <h1 class="h2 mt-auto">Verify Email?</h1>
    <p class="pb-2 pb-md-3">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </p>

    @if (session('status') == 'verification-link-sent')
        <div class="alert d-flex alert-success" role="alert">
            <i class="fi-check-circle fs-lg pe-1 mt-1 me-2"></i>
            <div>
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        </div>
    @endif

    <div class="mt-4 d-flex align-items-center justify-content-between">
        <x-primary-button wire:click="sendVerification" type="submit">
            {{ __('Resend Verification Email') }}
        </x-primary-button>

        <button wire:click="logout" type="submit" class="btn btn-secondary">
            {{ __('Log Out') }}
        </button>
    </div>
</div>
