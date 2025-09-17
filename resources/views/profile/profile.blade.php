<x-auth-layout>
    <x-slot:title>
        Profile - {{ config('app.name') }}
    </x-slot:title>

    <!-- Account profile content -->

    <h1 class="h2 pb-2 pb-lg-3">My profile</h1>

    <!-- Account progress -->
    <section class="row g-3 g-xl-4 pb-5 mb-md-3">

        <div class="col-12">
            <div class="card bg-warning-subtle border-0 h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="circular-progress text-warning flex-shrink-0 ms-n2 ms-sm-0" role="progressbar"
                        style="--fn-progress: 65" aria-label="Warning progress" aria-valuenow="65" aria-valuemin="0"
                        aria-valuemax="100">
                        <svg class="progress-circle">
                            <circle class="progress-background d-none-dark" r="0" style="stroke: #fff">
                            </circle>
                            <circle class="progress-background d-none d-block-dark" r="0"
                                style="stroke: rgba(255,255,255, .1)"></circle>
                            <circle class="progress-bar" r="0"></circle>
                        </svg>
                        <h5 class="position-absolute top-50 start-50 translate-middle text-center mb-0">
                            65%</h5>
                    </div>
                    <div class="ps-3 ps-sm-4">
                        <h3 class="h6 pb-1 mb-2">Complete your profile</h3>
                        <ul class="list-unstyled fs-sm mb-0">
                            <li class="d-flex">
                                <i class="fi-plus fs-base me-2" style="margin-top: .1875rem"></i>
                                Add the languages you speak
                            </li>
                            <li class="d-flex">
                                <i class="fi-plus fs-base me-2" style="margin-top: .1875rem"></i>
                                Verify your email
                            </li>
                            <li class="d-flex">
                                <i class="fi-plus fs-base me-2" style="margin-top: .1875rem"></i>
                                Add date of birth
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- User info -->
    <section class="pb-5 mb-md-3">
        <div class="ratio ratio-1x1 bg-body-tertiary border rounded-circle overflow-hidden mb-3 mb-md-4"
            style="width: 124px">
            <img src="assets/img/account/avatar-lg.jpg" alt="Avatar">
        </div>
        <h2 class="h5 pb-1 pb-sm-0 mb-2 mb-sm-3">Michael Williams</h2>
        <ul class="list-unstyled flex-row flex-wrap gap-sm-3 fs-sm mb-3">
            <li class="d-flex align-items-center me-2">
                <i class="fi-mail fs-base me-2"></i>
                m.williams@example.com
            </li>
            <li class="d-flex align-items-center me-2">
                <i class="fi-phone fs-base me-2"></i>
                (212) 555-7890
            </li>
            <li class="d-flex align-items-center">
                <i class="fi-map-pin fs-base me-2"></i>
                New York, Brooklyn
            </li>
        </ul>
        <p class="fs-sm pb-sm-1 pb-md-0 mb-md-4">Extensive experience in rentals and a vast database
            means I can quickly find the options that are right for you. Looking for a seamless and
            exciting rental experience? Contact me today - I promise it won't be boring! Your
            perfect
            home is just a call away.</p>
        <a class="btn btn-outline-secondary" href="account-settings.html">Edit profile</a>
    </section>


</x-auth-layout>
