<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Livewire\Volt\Component;

new class extends Component {
    public string $name = '';
    public string $email = '';

    /**
     * Mount the component.
     */
    public function mount(): void
    {
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
    }

    /**
     * Update the profile information for the currently authenticated user.
     */
    public function updateProfileInformation(): void
    {
        $user = Auth::user();

        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($user->id)],
        ]);

        $user->fill($validated);

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        $this->dispatch('profile-updated', name: $user->name);
    }

    /**
     * Send an email verification notification to the current user.
     */
    public function sendVerification(): void
    {
        $user = Auth::user();

        if ($user->hasVerifiedEmail()) {
            $this->redirectIntended(default: route('dashboard', absolute: false));

            return;
        }

        $user->sendEmailVerificationNotification();

        Session::flash('status', 'verification-link-sent');
    }
}; ?>

<section>

    <form wire:submit="updateProfileInformation" class="{{ $errors->any() ? 'is-invalid' : '' }}">

        @if (auth()->user() instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !auth()->user()->hasVerifiedEmail())
            <div class="alert d-sm-flex alert-dark pb-4 pt-sm-4" role="alert">
                <i class="fi-alert-triangle fs-4 mt-1 mb-2 mb-sm-0"></i>
                <div class="ps-sm-3 pe-sm-4">
                    <h4 class="alert-heading text-dark mb-2">{{ __('Your email address is unverified!') }}</h4>
                    <p class="mb-3 text-dark">
                        {{ __('Please verify your email address to ensure account security. Click the button to re-send the verification email.') }}
                    </p>
                    <hr class="text-dark opacity-25 my-3">
                    <div class="d-flex flex-column flex-md-row align-items-start gap-3">
                        <button wire:click.prevent="sendVerification" class="btn btn-dark mb-2 mb-sm-0">
                            {{ __('Verify Email.') }}
                        </button>
                        @if (session('status') === 'verification-link-sent')
                            <p class="alert p-0 m-0 text-start text-success">
                                {{ __('A new verification link has been sent to your email address.') }}</p>
                        @endif
                    </div>
                </div>
            </div>
        @endif

        <div class="row row-cols-1 row-cols-sm-2 g-4 mb-2">

            <div class="col position-relative">
                <label for="name" class="form-label fs-base">Name *</label>
                <input wire:model="name" type="text"
                    class="form-control {{ $errors->get('name') ? ' is-invalid' : '' }} form-control-lg" id="name">
                <x-input-error :messages="$errors->get('name')" />
            </div>

            <div class="col position-relative">
                <label for="email" class="form-label d-flex align-items-center fs-base">Email
                    address *
                    @if (auth()->user()->email_verified_at)
                        <span class="badge text-success bg-success-subtle ms-2">
                            Verified
                        </span>
                    @else
                        <span class="badge text-danger bg-danger-subtle ms-2">
                            Verify email
                        </span>
                    @endif
                </label>

                <input type="email" wire:model="email"
                    class="form-control {{ $errors->get('email') ? ' is-invalid' : '' }} form-control-lg"
                    id="email">
                <x-input-error :messages="$errors->get('email')" />


            </div>

            <div class="col position-relative">
                <label for="phone" class="form-label d-flex align-items-center fs-base">Phone number *</label>
                <input type="tel" class="form-control form-control-lg" id="phone"
                    data-input-format='{"numericOnly": true, "delimiters": ["+", " ", "-", " "], "blocks": [0, 3, 0, 3, 4]}'
                    value="+260 955 123456" placeholder="+260 ___ ______">
                <div class="invalid-tooltip bg-transparent p-0">Enter a valid Zambian phone number!</div>
            </div>

            <div class="col position-relative">
                <label class="form-label fs-base">Languages you speak</label>
                <select class="form-select form-select-lg" data-select="" multiple="" aria-label="Languages select">
                    <option value="">Select language</option>
                    <option value="English">English</option>
                    <option value="Spanish">Spanish</option>
                    <option value="French">French</option>
                    <option value="German">German</option>
                    <option value="Italian">Italian</option>
                </select>
            </div>

            <div class="col position-relative ">
                <label for="birth-date" class="form-label fs-base">Date of birth</label>
                <div class="position-relative">
                    <input type="text" class="form-control form-control-lg form-icon-end" id="birth-date"
                        data-datepicker="{&quot;dateFormat&quot;: &quot;F j, Y&quot;}" placeholder="Choose date">
                    <i class="fi-calendar fs-lg position-absolute top-50 end-0 translate-middle-y me-3"></i>
                </div>
            </div>

            <div class="position-relative mb-4">
                <label for="address" class="form-label fs-base">Address *</label>
                <input type="text" class="form-control form-control-lg" id="address" value="New York, Brooklyn">
                <div class="invalid-tooltip bg-transparent p-0">Enter your address!</div>
            </div>

            <div class="pb-2 mb-4 w-100">
                <label for="user-info" class="form-label fs-base">Information about you</label>
                <textarea class="form-control form-control-lg bg-transparent" id="user-info" rows="6">Extensive experience in rentals and a vast database means I can quickly find the options that are right for you. Looking for a seamless and exciting rental experience? Contact me today - I promise it won't be boring! Your perfect home is just a call away.</textarea>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 g-4 mb-4">
            <div class="d-flex align-items-center gap-3">

                <a class="btn btn-lg btn-secondary" href="account-profile.html">Cancel</a>

                <button type="submit" class="btn btn-lg btn-dark">Save changes</button>

                <x-action-message class="me-3" on="profile-updated">
                    {{ __('Saved.') }}
                </x-action-message>
            </div>
        </div>
    </form>
</section>
