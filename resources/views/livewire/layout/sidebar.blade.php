<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<aside class="col-lg-3" style="margin-top: -105px">
    <div class="offcanvas-lg offcanvas-start sticky-lg-top pe-lg-3 pe-xl-4" id="accountSidebar">
        <div class="d-none d-lg-block" style="height: 105px"></div>

        <!-- Header -->
        <div class="offcanvas-header d-lg-block py-3 p-lg-0">
            <div class="d-flex flex-row flex-lg-column align-items-center align-items-lg-start">
                <div class="flex-shrink-0 bg-body-secondary border rounded-circle overflow-hidden"
                    style="width: 64px; height: 64px">
                    <img src="{{ auth()->user()->profile->avatar }}" class="w-100" alt="Avatar">
                </div>
                <div class="pt-lg-3 ps-3 ps-lg-0">
                    <h6 class="mb-1">{{ auth()->user()->name }}</h6>
                    <p class="fs-sm mb-0">{{ auth()->user()->email }}</p>
                </div>
            </div>
            <button type="button" class="btn-close d-lg-none" data-bs-dismiss="offcanvas"
                data-bs-target="#accountSidebar" aria-label="Close"></button>
        </div>

        <!-- Body (Navigation) -->
        <div class="offcanvas-body d-block py-2 py-lg-4">
            <nav class="list-group list-group-borderless">
                <a class="list-group-item list-group-item-action d-flex align-items-center {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                    href="{{ route('dashboard') }}" wire:navigate>
                    <i class="fi-home fs-base opacity-75 me-2"></i>
                    Dashboard
                </a>
                <a class="list-group-item list-group-item-action d-flex align-items-center {{ request()->routeIs('profile') ? 'active' : '' }}"
                    aria-current="page" href="{{ route('profile') }}" wire:navigate>
                    <i class="fi-user fs-base opacity-75 me-2"></i>
                    Account
                </a>
                <a class="list-group-item list-group-item-action d-flex align-items-center {{ request()->routeIs('profile.listings') ? 'active' : '' }}"
                    href="{{ route('profile.listings') }}" wire:navigate>
                    <i class="fi-layers fs-base opacity-75 me-2"></i>
                    My listings
                </a>
                <a class="list-group-item list-group-item-action d-flex align-items-center {{ request()->routeIs('profile.reviews') ? 'active' : '' }}"
                    href="{{ route('profile.reviews') }}" wire:navigate>
                    <i class="fi-star fs-base opacity-75 me-2"></i>
                    Reviews
                </a>
                <a class="list-group-item list-group-item-action d-flex align-items-center {{ request()->routeIs('profile.favorites') ? 'active' : '' }}"
                    href="{{ route('profile.favorites') }}" wire:navigate>
                    <i class="fi-heart fs-base opacity-75 me-2"></i>
                    Favorites
                </a>
                <a class="list-group-item list-group-item-action d-flex align-items-center {{ request()->routeIs('profile.settings') ? 'active' : '' }}"
                    href="{{ route('profile.settings') }}" wire:navigate>
                    <i class="fi-settings fs-base opacity-75 me-2"></i>
                    Settings
                </a>

            </nav>
        </div>
    </div>

</aside>
