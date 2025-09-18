<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new class extends Component {
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

         // Dispatch close event
        $this->dispatch('closeModal');

        Auth::login($user);

        $this->redirect(route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div wire:ignore.self class="d-flex flex-column bg-white mx-md-4 justify-items-center justify-content-center">
    <div class="text-center mb-3 d-flex flex-column justify-items-center justify-content-center">
        <div class="d-flex justify-items-center justify-content-center mb-3">
            <a class="navbar-brand pt-0 d-flex justify-items-center justify-content-center mb-1" href="http://zedcars.test" wire:navigate="">
                <span class="d-sm-flex flex-shrink-0 text-primary rtl-flip">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="34">
                        <path d="M34.5 16.894v10.731c0 3.506-2.869 6.375-6.375 6.375H17.5h-.85C7.725 33.575.5 26.138.5 17c0-9.35 7.65-17 17-17s17 7.544 17 16.894z" fill="currentColor"></path>
                        <g fill-rule="evenodd">
                            <path d="M17.5 13.258c-3.101 0-5.655 2.554-5.655 5.655s2.554 5.655 5.655 5.655 5.655-2.554 5.655-5.655-2.554-5.655-5.655-5.655zm-9.433 5.655c0-5.187 4.246-9.433 9.433-9.433s9.433 4.246 9.433 9.433a9.36 9.36 0 0 1-1.569 5.192l2.397 2.397a1.89 1.89 0 0 1 0 2.671 1.89 1.89 0 0 1-2.671 0l-2.397-2.397a9.36 9.36 0 0 1-5.192 1.569c-5.187 0-9.433-4.246-9.433-9.433z" fill="#000" fill-opacity=".05"></path>
                            <g fill="#fff">
                                <path d="M17.394 10.153c-3.723 0-6.741 3.018-6.741 6.741s3.018 6.741 6.741 6.741 6.741-3.018 6.741-6.741-3.018-6.741-6.741-6.741zM7.347 16.894A10.05 10.05 0 0 1 17.394 6.847 10.05 10.05 0 0 1 27.44 16.894 10.05 10.05 0 0 1 17.394 26.94 10.05 10.05 0 0 1 7.347 16.894z">
                                </path>
                                <path d="M23.025 22.525c.645-.645 1.692-.645 2.337 0l3.188 3.188c.645.645.645 1.692 0 2.337s-1.692.645-2.337 0l-3.187-3.187c-.645-.646-.645-1.692 0-2.337z">
                                </path>
                            </g>
                        </g>
                        <path d="M23.662 14.663c2.112 0 3.825-1.713 3.825-3.825s-1.713-3.825-3.825-3.825-3.825 1.713-3.825 3.825 1.713 3.825 3.825 3.825z" fill="#fff"></path>
                        <path fill-rule="evenodd" d="M23.663 8.429a2.41 2.41 0 0 0-2.408 2.408 2.41 2.41 0 0 0 2.408 2.408 2.41 2.41 0 0 0 2.408-2.408 2.41 2.41 0 0 0-2.408-2.408zm-5.242 2.408c0-2.895 2.347-5.242 5.242-5.242s5.242 2.347 5.242 5.242-2.347 5.242-5.242 5.242-5.242-2.347-5.242-5.242z" fill="currentColor"></path>
                    </svg>
                </span>
            </a>
        </div>

        <h1 class="h2 mt-auto">Sign up for free</h1>

    </div>
    <form class="{{ $errors->any() ? 'is-invalid' : '' }}" wire:submit.prevent="register">
        <!-- Name -->
        <div class="mb-3">
            <x-text-input wire:model="name" label="Name" id="name" type="text" autocomplete="name"
                :placeholder="__('Full Name')" :messages="$errors->get('name')" />
        </div>

        <!-- Email Address -->
        <div class="mb-3">
            <x-text-input wire:model="email" label="Email" id="email" type="email" autocomplete="username"
                :placeholder="__('Minimum 8 characters')" :messages="$errors->get('email')" />
        </div>

        <!-- Password -->
        <div class="mb-3">
            <x-text-input wire:model="password" label="Password" id="password" type="password"
                autocomplete="current-password" :placeholder="__('New Password')" :messages="$errors->get('password')" />
        </div>


        <!-- Confirm Password -->
        <!-- Password -->
        <div class="mb-3">
            <x-text-input wire:model="password_confirmation" label="confirm_password" id="confirm_password"
                type="password" autocomplete="current-password" label="Confirm Password" :placeholder="__('Confirm New Password')" />
        </div>


        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="btn-lg w-100" type="submit">
                {{ __('Create an account') }}
            </x-primary-button>
        </div>

        <div class="nav d-flex align-items-center justify-content-center fs-sm my-3">
            I already have an account.  <button type="button" class="btn btn-link ps-1 py-0" data-bs-toggle="modal" data-bs-target="#loginModal">
                Sign in
            </button>
        </div>
    </form>
</div>
@script
    document.addEventListener('livewire:navigated', () => {
        const loginModal = new bootstrap.Modal('#registerModal', {})
    });
@endscript