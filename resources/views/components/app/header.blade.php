<header class="navbar navbar-expand-lg bg-body navbar-sticky sticky-top z-fixed px-0" data-sticky-element="">
    <div class="container">

        <!-- Mobile offcanvas menu toggler (Hamburger) -->
        <button type="button" class="navbar-toggler me-3 me-lg-0" data-bs-toggle="offcanvas" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar brand (Logo) -->
        <a class="navbar-brand py-1 py-md-2 py-xl-1 me-2 me-sm-n4 me-md-n5 me-lg-0" href="index.html">
            <span class="d-none d-sm-flex flex-shrink-0 text-primary rtl-flip me-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="34">
                    <path
                        d="M34.5 16.894v10.731c0 3.506-2.869 6.375-6.375 6.375H17.5h-.85C7.725 33.575.5 26.138.5 17c0-9.35 7.65-17 17-17s17 7.544 17 16.894z"
                        fill="currentColor"></path>
                    <g fill-rule="evenodd">
                        <path
                            d="M17.5 13.258c-3.101 0-5.655 2.554-5.655 5.655s2.554 5.655 5.655 5.655 5.655-2.554 5.655-5.655-2.554-5.655-5.655-5.655zm-9.433 5.655c0-5.187 4.246-9.433 9.433-9.433s9.433 4.246 9.433 9.433a9.36 9.36 0 0 1-1.569 5.192l2.397 2.397a1.89 1.89 0 0 1 0 2.671 1.89 1.89 0 0 1-2.671 0l-2.397-2.397a9.36 9.36 0 0 1-5.192 1.569c-5.187 0-9.433-4.246-9.433-9.433z"
                            fill="#000" fill-opacity=".05"></path>
                        <g fill="#fff">
                            <path
                                d="M17.394 10.153c-3.723 0-6.741 3.018-6.741 6.741s3.018 6.741 6.741 6.741 6.741-3.018 6.741-6.741-3.018-6.741-6.741-6.741zM7.347 16.894A10.05 10.05 0 0 1 17.394 6.847 10.05 10.05 0 0 1 27.44 16.894 10.05 10.05 0 0 1 17.394 26.94 10.05 10.05 0 0 1 7.347 16.894z">
                            </path>
                            <path
                                d="M23.025 22.525c.645-.645 1.692-.645 2.337 0l3.188 3.188c.645.645.645 1.692 0 2.337s-1.692.645-2.337 0l-3.187-3.187c-.645-.646-.645-1.692 0-2.337z">
                            </path>
                        </g>
                    </g>
                    <path
                        d="M23.662 14.663c2.112 0 3.825-1.713 3.825-3.825s-1.713-3.825-3.825-3.825-3.825 1.713-3.825 3.825 1.713 3.825 3.825 3.825z"
                        fill="#fff"></path>
                    <path fill-rule="evenodd"
                        d="M23.663 8.429a2.41 2.41 0 0 0-2.408 2.408 2.41 2.41 0 0 0 2.408 2.408 2.41 2.41 0 0 0 2.408-2.408 2.41 2.41 0 0 0-2.408-2.408zm-5.242 2.408c0-2.895 2.347-5.242 5.242-5.242s5.242 2.347 5.242 5.242-2.347 5.242-5.242 5.242-5.242-2.347-5.242-5.242z"
                        fill="currentColor"></path>
                </svg>
            </span>
            Finder
        </a>

        <!-- Main navigation that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
        <nav class="offcanvas offcanvas-start" id="navbarNav" tabindex="-1" aria-labelledby="navbarNavLabel">
            <div class="offcanvas-header py-3">
                <h5 class="offcanvas-title" id="navbarNavLabel">Browse Finder</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body pt-2 pb-4 py-lg-0 mx-lg-auto">
                <ul class="navbar-nav position-relative">
                    <li class="nav-item py-lg-2 me-lg-n1 me-xl-0">
                        <a class="nav-link" aria-current="page" href="{{ route('home') }}" role="button"
                            aria-expanded="false">Home</a>
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
                    <li class="nav-item dropdown py-lg-2 me-lg-n1 me-xl-0">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            data-bs-trigger="hover" data-bs-auto-close="outside" aria-expanded="false">Account</a>
                        <ul class="dropdown-menu">
                            <li class="dropend">
                                <a class="dropdown-item dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Auth
                                    Pages</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="account-signin.html">Sign In</a></li>
                                    <li><a class="dropdown-item" href="account-signup.html">Sign Up</a></li>
                                    <li><a class="dropdown-item" href="account-password-recovery.html">Password
                                            Recovery</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="account-profile.html">My Profile</a></li>
                            <li><a class="dropdown-item" href="account-listings.html">My Listings</a></li>
                            <li><a class="dropdown-item" href="account-reviews.html">Reviews</a></li>
                            <li><a class="dropdown-item" href="account-favorites.html">Favorites</a></li>
                            <li><a class="dropdown-item" href="account-payment.html">Payment Details</a></li>
                            <li><a class="dropdown-item" href="account-settings.html">Account Settings</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown py-lg-2 me-lg-n1 me-xl-0">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            data-bs-trigger="hover" data-bs-auto-close="outside" aria-expanded="false">Pages</a>
                        <ul class="dropdown-menu">
                            <li class="dropend">
                                <a class="dropdown-item dropdown-toggle" href="#!" role="button"
                                    data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">About</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="about-v1.html">About v.1</a></li>
                                    <li><a class="dropdown-item" href="about-v2.html">About v.2</a></li>
                                </ul>
                            </li>
                            <li class="dropend">
                                <a class="dropdown-item dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Blog</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="blog-layout-v1.html">Blog Layout v.1</a>
                                    </li>
                                    <li><a class="dropdown-item" href="blog-layout-v2.html">Blog Layout v.2</a>
                                    </li>
                                    <li><a class="dropdown-item" href="blog-layout-v3.html">Blog Layout v.3</a>
                                    </li>
                                    <li><a class="dropdown-item" href="blog-layout-v4.html">Blog Layout v.4</a>
                                    </li>
                                    <li><a class="dropdown-item" href="blog-single-v1.html">Single Post v.1</a>
                                    </li>
                                    <li><a class="dropdown-item" href="blog-single-v2.html">Single Post v.2</a>
                                    </li>
                                    <li><a class="dropdown-item" href="blog-single-v3.html">Single Post v.3</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropend">
                                <a class="dropdown-item dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" data-bs-trigger="hover"
                                    aria-expanded="false">Contact</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="contact-v1.html">Contact v.1</a></li>
                                    <li><a class="dropdown-item" href="contact-v2.html">Contact v.2</a></li>
                                    <li><a class="dropdown-item" href="contact-v3.html">Contact v.3</a></li>
                                </ul>
                            </li>
                            <li class="dropend">
                                <a class="dropdown-item dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Help
                                    Center</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="help-topics-v1.html">Help Topics v.1</a>
                                    </li>
                                    <li><a class="dropdown-item" href="help-topics-v2.html">Help Topics v.2</a>
                                    </li>
                                    <li><a class="dropdown-item" href="help-topics-v3.html">Help Topics v.3</a>
                                    </li>
                                    <li><a class="dropdown-item" href="help-single-article-v1.html">Help Single
                                            Article v.1</a></li>
                                    <li><a class="dropdown-item" href="help-single-article-v2.html">Help Single
                                            Article v.2</a></li>
                                    <li><a class="dropdown-item" href="help-single-article-v3.html">Help Single
                                            Article v.3</a></li>
                                </ul>
                            </li>
                            <li class="dropend">
                                <a class="dropdown-item dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">404
                                    Error</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="404-bg-image.html">Background Image (Real
                                            Estate)</a></li>
                                    <li><a class="dropdown-item" href="404-icon.html">Icon Image (Cars)</a></li>
                                    <li><a class="dropdown-item" href="404-split-screen.html">Split Screen
                                            (Contractors)</a></li>
                                    <li><a class="dropdown-item" href="404-illustration.html">Illustration (City
                                            Guide)</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="terms-and-conditions.html">Terms &amp;
                                    Conditions</a></li>
                        </ul>
                    </li>
                    <li class="nav-item py-lg-2 me-lg-n2 me-xl-0">
                        <a class="nav-link" href="docs/installation.html">Docs</a>
                    </li>
                    <li class="nav-item py-lg-2 me-lg-n2 me-xl-0">
                        <a class="nav-link" href="docs/typography.html">Components</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Button group -->
        <div class="d-flex gap-sm-1">

            @auth
                <livewire:layout.navigation />

                <!-- Account button -->
                <a class="btn btn-icon btn-outline-secondary fs-lg border-0 me-2" href="account-signin.html"
                    aria-label="Sign in to account">
                    <i class="fi-user animate-target"></i>
                </a>

                <!-- Add property button  -->
                <a class="btn btn-primary animate-scale" href="add-car.html">
                    <i class="fi-plus fs-lg animate-target ms-n2 me-1 me-sm-2"></i>
                    Sell car
                </a>

                <a href="{{ url('/dashboard') }}" class="btn btn-outline-primary">
                    Dashboard
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
