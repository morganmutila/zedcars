<div class="dropdown pe-1 me-2">
    <a class="btn btn-icon hover-effect-scale position-relative bg-body-secondary border rounded-circle overflow-hidden"
        href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="My account">
        <img src="{{ asset('assets/img/account/avatar.svg') }}"
            class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Avatar">
    </a>
    <ul class="dropdown-menu dropdown-menu-end" style="--fn-dropdown-spacer: .5rem" wire:ignore>
        <li><span class="h6 dropdown-header pb-0" x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name"
                x-on:profile-updated.window="name = $event.detail.name"></span>
        </li>
        <li><small class="text-muted pt-0 dropdown-header" x-data="{{ json_encode(['email' => auth()->user()->email]) }}" x-text="email"
                x-on:profile-updated.window="email = $event.detail.email"></small>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>
        <li>
            <a class="dropdown-item" href="{{ route('dashboard') }}" wire:navigate>
                <i class="fi-home opacity-75 me-2"></i>
                Dashboard
            </a>
        </li>
        <li>
            <a class="dropdown-item" href="{{ route('profile') }}" wire:navigate>
                <i class="fi-user opacity-75 me-2"></i>
                My profile
            </a>
        </li>
        <li>
            <a class="dropdown-item" href="account-listings.html">
                <i class="fi-layers opacity-75 me-2"></i>
                My listings
            </a>
        </li>

        <li>
            <a class="dropdown-item" href="{{ route('profile.settings') }}" wire:navigate>
                <i class="fi-settings opacity-75 me-2"></i>
                Account settings
            </a>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>
        <li>
            <button wire:click="logout" class="dropdown-item">
                <i class="fi-log-out opacity-75 me-2"></i>
                Sign out
            </button>
        </li>
    </ul>
</div>
