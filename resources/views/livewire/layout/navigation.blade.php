<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component {
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>
<header class="navbar navbar-expand-lg bg-body navbar-sticky sticky-top z-fixed px-0" data-sticky-element="">
    <div class="container">

        <!-- Mobile offcanvas menu toggler (Hamburger) -->
        <button type="button" class="navbar-toggler me-3 me-lg-0" data-bs-toggle="offcanvas" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar brand (Logo) -->
        <x-application-logo class="navbar-brand py-1 py-md-2 py-xl-1 me-2 me-sm-n4 me-md-n5 me-lg-0" />

        <!-- Main navigation that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
        <nav class="offcanvas offcanvas-start" id="navbarNav" tabindex="-1" aria-labelledby="navbarNavLabel">
            <div class="offcanvas-header py-3">
                <h5 class="offcanvas-title" id="navbarNavLabel">Browse Finder</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body pt-2 pb-4 py-lg-0 mx-lg-auto">
                <ul class="navbar-nav position-relative">
                    <li class="nav-item py-lg-2 me-lg-n1 me-xl-0">
                        <x-nav-link href="{{ route('home') }}" role="button" :active="request()->routeIs('home')">
                            Home
                        </x-nav-link>
                    </li>

                    <li class="nav-item dropdown position-static py-lg-2 me-lg-n1 me-xl-0">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            data-bs-trigger="hover" aria-expanded="false">Listings</a>
                        <div class="dropdown-menu rounded-4 p-4">
                            <div class="d-flex flex-column flex-lg-row gap-4">
                                <div style="min-width: 190px">
                                    <div class="h6 mb-2">Real Estate</div>
                                    <ul class="nav flex-column gap-2 mt-0">
                                        <li class="pt-1">
                                            <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                                                href="listings-real-estate.html">Map/Listings Split View</a>
                                        </li>
                                        <li class="pt-1">
                                            <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                                                href="single-entry-real-estate.html">Property Details Page</a>
                                        </li>
                                        <li class="pt-1">
                                            <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                                                href="vendor-real-estate.html">Vendor Page</a>
                                        </li>
                                    </ul>
                                    <div class="h6 pt-4 mb-2">Cars</div>
                                    <ul class="nav flex-column gap-2 mt-0">
                                        <li class="pt-1">
                                            <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                                                href="listings-grid-cars.html">Listings Grid View</a>
                                        </li>
                                        <li class="pt-1">
                                            <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                                                href="listings-list-cars.html">Listings List View</a>
                                        </li>
                                        <li class="pt-1">
                                            <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                                                href="single-entry-cars.html">Car Details Page</a>
                                        </li>
                                    </ul>
                                    <div class="h6 pt-4 mb-2">Contractors</div>
                                    <ul class="nav flex-column gap-2 mt-0">
                                        <li class="pt-1">
                                            <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                                                href="listings-contractors.html">Listings with Side Filters</a>
                                        </li>
                                        <li class="pt-1">
                                            <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                                                href="single-entry-contractors.html">Contractor Details Page</a>
                                        </li>
                                    </ul>
                                    <div class="h6 pt-4 mb-2">Doctors</div>
                                    <ul class="nav flex-column gap-2 mt-0">
                                        <li class="pt-1">
                                            <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                                                href="listings-list-doctors.html">Listings List View</a>
                                        </li>
                                        <li class="pt-1">
                                            <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                                                href="listings-grid-doctors.html">Listings Grid View</a>
                                        </li>
                                        <li class="pt-1">
                                            <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                                                href="single-entry-doctors.html">Doctor Details Page</a>
                                        </li>
                                    </ul>
                                </div>
                                <div style="min-width: 190px">
                                    <div class="h6 mb-2">Events</div>
                                    <ul class="nav flex-column gap-2 mt-0">
                                        <li class="pt-1">
                                            <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                                                href="listings-events.html">Listings with Top Filters</a>
                                        </li>
                                        <li class="pt-1">
                                            <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                                                href="single-entry-events.html">Event Details Page</a>
                                        </li>
                                    </ul>
                                    <div class="h6 pt-4 mb-2">City Guide</div>
                                    <ul class="nav flex-column gap-2 mt-0">
                                        <li class="pt-1">
                                            <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                                                href="listings-side-filters-city-guide.html">Listings with Side
                                                Filters</a>
                                        </li>
                                        <li class="pt-1">
                                            <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                                                href="listings-top-filters-city-guide.html">Listings with Top
                                                Filters</a>
                                        </li>
                                        <li class="pt-1">
                                            <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                                                href="single-entry-city-guide.html">Place Details Page</a>
                                        </li>
                                    </ul>
                                    <div class="h6 pt-4 mb-2">Add Property</div>
                                    <ul class="nav flex-column gap-2 mt-0">
                                        <li class="pt-1">
                                            <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                                                href="add-property-type.html">Property type</a>
                                        </li>
                                        <li class="pt-1">
                                            <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                                                href="add-property-location.html">Location</a>
                                        </li>
                                        <li class="pt-1">
                                            <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                                                href="add-property-photos.html">Photos and Videos</a>
                                        </li>
                                        <li class="pt-1">
                                            <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                                                href="add-property-details.html">Property Details</a>
                                        </li>
                                        <li class="pt-1">
                                            <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                                                href="add-property-price.html">Price</a>
                                        </li>
                                        <li class="pt-1">
                                            <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                                                href="add-property-contact-info.html">Contact Info</a>
                                        </li>
                                        <li class="pt-1">
                                            <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                                                href="add-property-promotion.html">Ad Promotion</a>
                                        </li>
                                    </ul>
                                </div>
                                <div style="min-width: 190px">
                                    <div class="h6 mb-2">Add Contractor</div>
                                    <ul class="nav flex-column gap-2 mt-0">
                                        <li class="pt-1">
                                            <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                                                href="add-contractor-location.html">Business Location</a>
                                        </li>
                                        <li class="pt-1">
                                            <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                                                href="add-contractor-services.html">Choose Services</a>
                                        </li>
                                        <li class="pt-1">
                                            <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                                                href="add-contractor-profile.html">Profile Details</a>
                                        </li>
                                        <li class="pt-1">
                                            <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                                                href="add-contractor-price-hours.html">Price and Hours</a>
                                        </li>
                                        <li class="pt-1">
                                            <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                                                href="add-contractor-project.html">Create First Project</a>
                                        </li>
                                    </ul>
                                    <div class="h6 pt-4 mb-2">Add (Sell) Car</div>
                                    <ul class="nav flex-column gap-2 mt-0">
                                        <li class="pt-1">
                                            <a class="nav-link hover-effect-underline d-inline fw-normal p-0"
                                                href="add-car.html">Add (Sell) Car Page</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item py-lg-2 me-lg-n2 me-xl-0">
                        <x-nav-link href="{{ route('contact') }}" role="button" :active="request()->routeIs('contact')">
                            Contact Us
                        </x-nav-link>
                    </li>
                    <li class="nav-item py-lg-2 me-lg-n2 me-xl-0">
                        <x-nav-link href="{{ route('about') }}" role="button" :active="request()->routeIs('about')">
                            About Us
                        </x-nav-link>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Button group -->
        <div class="d-flex gap-3">

            @auth

                <!-- Account button -->
                <div class="dropdown pe-1 me-2">
                    <a class="btn btn-icon hover-effect-scale position-relative bg-body-secondary border rounded-circle overflow-hidden"
                        href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                        aria-label="My account">
                        <img src="assets/img/account/avatar-sm.jpg"
                            class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 object-fit-cover"
                            alt="Avatar">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" style="--fn-dropdown-spacer: .5rem">
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
                            <a class="dropdown-item" href="account-reviews.html">
                                <i class="fi-star opacity-75 me-2"></i>
                                Reviews
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="account-favorites.html">
                                <i class="fi-heart opacity-75 me-2"></i>
                                Favorites
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="account-payment.html">
                                <i class="fi-credit-card opacity-75 me-2"></i>
                                Payment details
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="account-settings.html">
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

                <!-- Add property button  -->
                <a class="btn btn-primary animate-scale" href="{{ route('dashboard') }}">
                    <i class="fi-plus fs-lg animate-target ms-n2 me-1 me-sm-2"></i>
                    Sell car
                </a>
            @else
                <a href="{{ route('login') }}" class="btn btn-outline-secondary">
                    Log in
                </a>

                <a href="{{ route('register') }}" class="btn btn-primary">
                    Sign up
                </a>
            @endauth
        </div>
    </div>
</header>
