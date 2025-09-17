<x-auth-layout>

    <x-slot:title>
        Account settings - {{ config('app.name') }}
    </x-slot:title>

    <!-- Account settings content -->
    <h1 class="h2 pb-2 pb-lg-3">Account Settings</h1>

    <!-- Nav pills -->
    <div class="nav overflow-x-auto mb-3">
        <ul class="nav nav-pills flex-nowrap gap-2 pb-2 mb-1" role="tablist">
            <li class="nav-item me-1" role="presentation">
                <button type="button" class="nav-link text-nowrap active" id="personal-info-tab" data-bs-toggle="pill"
                    data-bs-target="#personal-info" role="tab" aria-controls="personal-info" aria-selected="true">
                    Personal info
                </button>
            </li>
            <li class="nav-item me-1" role="presentation">
                <button class="nav-link text-nowrap" id="security-tab" data-bs-toggle="pill" data-bs-target="#security"
                    type="button" role="tab" aria-controls="security" aria-selected="false">
                    Password and security
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-nowrap" id="notifications-tab" data-bs-toggle="pill"
                    data-bs-target="#notifications" type="button" role="tab" aria-controls="notifications"
                    aria-selected="false">
                    Notification settings
                </button>
            </li>
        </ul>
    </div>

    <div class="tab-content">

        <!-- Personal info tab -->
        <div class="tab-pane fade show active" id="personal-info" role="tabpanel" aria-labelledby="personal-info-tab">
            <div class="vstack gap-4">

                <!-- Profile completeness info card -->
                <div class="card bg-warning-subtle border-0 mb-2">
                    <div class="card-body d-flex align-items-center">
                        <div class="circular-progress text-warning flex-shrink-0 ms-n2 ms-sm-0" role="progressbar"
                            style="--fn-progress: 65" aria-label="Warning progress" aria-valuenow="65" aria-valuemin="0"
                            aria-valuemax="100">
                            <svg class="progress-circle">
                                <circle class="progress-background d-none-dark" r="0" style="stroke: #fff"></circle>
                                <circle class="progress-background d-none d-block-dark" r="0"
                                    style="stroke: rgba(255,255,255, .1)"></circle>
                                <circle class="progress-bar" r="0"></circle>
                            </svg>
                            <h5 class="position-absolute top-50 start-50 translate-middle text-center mb-0">65%</h5>
                        </div>
                        <div class="ps-3 ps-sm-4">
                            <h3 class="h6 pb-1 mb-2">Complete your profile</h3>
                            <ul class="list-unstyled flex-row flex-wrap fs-sm mb-0">
                                <li class="d-flex me-3">
                                    <i class="fi-plus fs-base me-2" style="margin-top: .1875rem"></i>
                                    Verify your email
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Profile picture (Avatar) -->
                <div class="d-flex align-items-start align-items-sm-center mb-2">
                    <div class="ratio ratio-1x1 hover-effect-opacity bg-body-tertiary border rounded-circle overflow-hidden"
                        style="width: 124px">
                        <img src="assets/img/account/avatar-lg.jpg" alt="Avatar">
                        <div
                            class="hover-effect-target position-absolute top-0 start-0 d-flex align-items-center justify-content-center w-100 h-100 opacity-0">
                            <button type="button" class="btn btn-icon btn-sm btn-light position-relative z-2"
                                aria-label="Remove">
                                <i class="fi-trash fs-base"></i>
                            </button>
                            <span class="position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 z-1"></span>
                        </div>
                    </div>
                    <div class="ps-3 ps-sm-4">
                        <p class="fs-sm" style="max-width: 440px">Your profile photo will appear on your profile
                            and directory listing. PNG or JPG no bigger than 1000px wide and tall.</p>
                        <button type="button" class="btn btn-sm btn-outline-secondary">
                            <i class="fi-refresh-ccw fs-sm ms-n1 me-2"></i>
                            Update photo
                        </button>
                    </div>
                </div>

                <!-- Settings form -->
                <section class="mb-3">
                    <livewire:profile.update-profile-information-form />
                </section>

            </div>
        </div>


        <!-- Password and security tab -->
        <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">

            <p class="mb-sm-4">Your current email address is <span
                    class="fw-medium text-primary">{{ Auth::user()->email }}</span></p>

            <!-- Change password form -->
            <section class="mb-3">
                <livewire:profile.update-password-form />
            </section>

            <!-- Device history -->
            <h3 class="h4 pt-5 mt-md-3 mb-sm-4">Device history</h3>
            <div class="row g-3 g-xl-4 mb-3 mb-md-4">
                <div class="col-sm-6 col-md-4">
                    <div class="card h-100">
                        <div class="dropdown position-absolute top-0 end-0 mt-2 me-2">
                            <button type="button" class="btn btn-icon btn-sm fs-xl text-dark-emphasis border-0"
                                data-bs-toggle="dropdown" aria-expanded="false" aria-label="Actions">
                                <i class="fi-more-vertical"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" style="--fn-dropdown-min-width: 8rem">
                                <li>
                                    <a class="dropdown-item" href="#!">
                                        <i class="fi-log-out opacity-75 me-2"></i>
                                        Sign out
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body pb-2">
                            <i class="fi-computer fs-3 text-body-tertiary pb-1 mb-2"></i>
                            <h6 class="mb-0">Mac - New York, USA</h6>
                        </div>
                        <div class="card-footer d-flex align-items-center gap-2 bg-transparent border-0 pt-0 pb-4">
                            <span class="fs-sm text-body-secondary">Chrome</span>
                            <span class="badge text-success bg-success-subtle">Active now</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card h-100">
                        <div class="dropdown position-absolute top-0 end-0 mt-2 me-2">
                            <button type="button" class="btn btn-icon btn-sm fs-xl text-dark-emphasis border-0"
                                data-bs-toggle="dropdown" aria-expanded="false" aria-label="Actions">
                                <i class="fi-more-vertical"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" style="--fn-dropdown-min-width: 8rem">
                                <li>
                                    <a class="dropdown-item" href="#!">
                                        <i class="fi-log-out opacity-75 me-2"></i>
                                        Sign out
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body pb-2">
                            <i class="fi-smartphone fs-3 text-body-tertiary pb-1 mb-2"></i>
                            <h6 class="mb-0">iPhone 15 - New York, USA</h6>
                        </div>
                        <div class="card-footer d-flex align-items-center gap-1 bg-transparent border-0 pt-0 pb-4">
                            <span class="fs-sm text-body-secondary">Finder App</span>
                            <i class="fi-bullet"></i>
                            <span class="fs-sm text-body-secondary">20 hours ago</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav">
                <a class="nav-link position-relative px-0" href="#!">
                    <i class="fi-log-out fs-base me-2"></i>
                    <span class="hover-effect-underline stretched-link">Sign out of all sessions</span>
                </a>
            </div>

            <!-- Delete account -->
            <section class="mb-3">
                <livewire:profile.delete-user-form />
            </section>

        </div>


        <!-- Notification settings tab -->
        <div class="tab-pane fade" id="notifications" role="tabpanel" aria-labelledby="notifications-tab">

            <!-- Item -->
            <div class="d-sm-flex align-items-center justify-content-between border-bottom pb-4">
                <div class="me-4 mb-md-2">
                    <h3 class="h6 mb-2">New rental alerts</h3>
                    <p class="fs-sm pb-1 pb-sm-0 mb-sm-0">New rentals that match your <a class="text-body"
                            href="account-favorites.html">Favorites</a></p>
                </div>
                <div class="d-flex gap-4 gap-xl-5 mb-md-2">
                    <div class="form-check form-switch d-flex align-items-center ps-0 mb-0">
                        <label for="email-1" class="form-check-label">Email</label>
                        <input type="checkbox" class="form-check-input ms-2" role="switch" id="email-1"
                            checked="">
                    </div>
                    <div class="form-check form-switch d-flex align-items-center ps-0 mb-0">
                        <label for="phone-1" class="form-check-label mb-1">Phone</label>
                        <input type="checkbox" class="form-check-input ms-2" role="switch" id="phone-1">
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="d-sm-flex align-items-center justify-content-between border-bottom py-4">
                <div class="me-4 my-md-2">
                    <h3 class="h6 mb-2">Rental status updates</h3>
                    <p class="fs-sm pb-1 pb-sm-0 mb-sm-0">Updates like price changes and off-market status on your
                        <a class="text-body" href="account-favorites.html">Favorites</a>
                    </p>
                </div>
                <div class="d-flex gap-4 gap-xl-5 my-md-2">
                    <div class="form-check form-switch d-flex align-items-center ps-0 mb-0">
                        <label for="email-2" class="form-check-label">Email</label>
                        <input type="checkbox" class="form-check-input ms-2" role="switch" id="email-2"
                            checked="">
                    </div>
                    <div class="form-check form-switch d-flex align-items-center ps-0 mb-0">
                        <label for="phone-2" class="form-check-label mb-1">Phone</label>
                        <input type="checkbox" class="form-check-input ms-2" role="switch" id="phone-2">
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="d-sm-flex align-items-center justify-content-between border-bottom py-4">
                <div class="me-4 my-md-2">
                    <h3 class="h6 mb-2">Finder recommendations</h3>
                    <p class="fs-sm pb-1 pb-sm-0 mb-sm-0">Rentals we think you'll like. These recommendations may
                        be slightly outside your search criteria</p>
                </div>
                <div class="d-flex gap-4 gap-xl-5 my-md-2">
                    <div class="form-check form-switch d-flex align-items-center ps-0 mb-0">
                        <label for="email-3" class="form-check-label">Email</label>
                        <input type="checkbox" class="form-check-input ms-2" role="switch" id="email-3">
                    </div>
                    <div class="form-check form-switch d-flex align-items-center ps-0 mb-0">
                        <label for="phone-3" class="form-check-label mb-1">Phone</label>
                        <input type="checkbox" class="form-check-input ms-2" role="switch" id="phone-3">
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="d-sm-flex align-items-center justify-content-between border-bottom py-4">
                <div class="me-4 my-md-2">
                    <h3 class="h6 mb-2">Featured news</h3>
                    <p class="fs-sm pb-1 pb-sm-0 mb-sm-0">News and tips you may be interested in</p>
                </div>
                <div class="d-flex gap-4 gap-xl-5 my-md-2">
                    <div class="form-check form-switch d-flex align-items-center ps-0 mb-0">
                        <label for="email-4" class="form-check-label">Email</label>
                        <input type="checkbox" class="form-check-input ms-2" role="switch" id="email-4">
                    </div>
                    <div class="form-check form-switch d-flex align-items-center ps-0 mb-0">
                        <label for="phone-4" class="form-check-label mb-1">Phone</label>
                        <input type="checkbox" class="form-check-input ms-2" role="switch" id="phone-4"
                            checked="">
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="d-sm-flex align-items-center justify-content-between border-bottom py-4">
                <div class="me-4 my-md-2">
                    <h3 class="h6 mb-2">Finder extras</h3>
                    <p class="fs-sm pb-1 pb-sm-0 mb-sm-0">Occasional notifications about new features to make
                        finding the perfect rental easy</p>
                </div>
                <div class="d-flex gap-4 gap-xl-5 my-md-2">
                    <div class="form-check form-switch d-flex align-items-center ps-0 mb-0">
                        <label for="email-5" class="form-check-label">Email</label>
                        <input type="checkbox" class="form-check-input ms-2" role="switch" id="email-5"
                            checked="">
                    </div>
                    <div class="form-check form-switch d-flex align-items-center ps-0 mb-0">
                        <label for="phone-5" class="form-check-label mb-1">Phone</label>
                        <input type="checkbox" class="form-check-input ms-2" role="switch" id="phone-5"
                            checked="">
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-auth-layout>
