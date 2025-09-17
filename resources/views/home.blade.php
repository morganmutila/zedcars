<x-app-layout>

    <x-slot:title>Home</x-slot>

    <!-- Hero with search form -->
    <livewire:layout.hero />


    <!-- Body type categories -->
    <section class="container pt-2 pt-sm-3 pt-md-4 pt-lg-5 pb-5 mb-xxl-3">
        <div class="d-flex align-items-start justify-content-between gap-4 pt-5 pb-3 mb-2 mb-sm-3">
            <h2 class="mb-0">Popular car body types</h2>
            <div class="nav">
                <a class="nav-link position-relative fs-base text-nowrap py-1 px-0" href="#!">
                    <span class="hover-effect-underline stretched-link me-1">View all</span>
                    <i class="fi-chevron-right fs-lg"></i>
                </a>
            </div>
        </div>

        <!-- Row of cards that turns into carousel on screens < 1200px wide (xl breakpoint) -->
        <div class="swiper"
            data-swiper="{
                &quot;slidesPerView&quot;: 2,
                &quot;spaceBetween&quot;: 16,
                &quot;pagination&quot;: {
                    &quot;el&quot;: &quot;.swiper-pagination&quot;,
                    &quot;clickable&quot;: true
                },
                &quot;breakpoints&quot;: {
                    &quot;460&quot;: {
                    &quot;slidesPerView&quot;: 2,
                    &quot;spaceBetween&quot;: 24
                    },
                    &quot;600&quot;: {
                    &quot;slidesPerView&quot;: 3,
                    &quot;spaceBetween&quot;: 24
                    },
                    &quot;768&quot;: {
                    &quot;slidesPerView&quot;: 4,
                    &quot;spaceBetween&quot;: 24
                    },
                    &quot;992&quot;: {
                    &quot;slidesPerView&quot;: 5,
                    &quot;spaceBetween&quot;: 24
                    },
                    &quot;1200&quot;: {
                    &quot;slidesPerView&quot;: 6,
                    &quot;spaceBetween&quot;: 24
                    }
                }
            }">

            <div class="swiper-wrapper">

                <!-- Category -->
                <div class="swiper-slide">
                    <article class="card w-100 hover-effect-scale bg-body-tertiary border-0">
                        <div class="card-body text-center px-3">
                            <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(80 / 164 * 100%)">
                                <img src="assets/img/home/cars/body-type/sedan.svg" alt="Image">
                            </div>
                            <h3 class="h6 pt-3 mb-1">
                                <a class="hover-effect-underline stretched-link"
                                    href="listings-grid-cars.html">Sedan</a>
                            </h3>
                            <p class="fs-sm text-body-secondary mb-1 mb-sm-2">1765 offers</p>
                        </div>
                    </article>
                </div>

                <!-- Category -->
                <div class="swiper-slide">
                    <article class="card w-100 hover-effect-scale bg-body-tertiary border-0">
                        <div class="card-body text-center px-3">
                            <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(80 / 164 * 100%)">
                                <img src="assets/img/home/cars/body-type/coupe.svg" alt="Image">
                            </div>
                            <h3 class="h6 pt-3 mb-1">
                                <a class="hover-effect-underline stretched-link"
                                    href="listings-grid-cars.html">Coupe</a>
                            </h3>
                            <p class="fs-sm text-body-secondary mb-1 mb-sm-2">923 offers</p>
                        </div>
                    </article>
                </div>

                <!-- Category -->
                <div class="swiper-slide">
                    <article class="card w-100 hover-effect-scale bg-body-tertiary border-0">
                        <div class="card-body text-center px-3">
                            <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(80 / 164 * 100%)">
                                <img src="assets/img/home/cars/body-type/convertible.svg" alt="Image">
                            </div>
                            <h3 class="h6 pt-3 mb-1">
                                <a class="hover-effect-underline stretched-link"
                                    href="listings-grid-cars.html">Convertible</a>
                            </h3>
                            <p class="fs-sm text-body-secondary mb-1 mb-sm-2">120 offers</p>
                        </div>
                    </article>
                </div>

                <!-- Category -->
                <div class="swiper-slide">
                    <article class="card w-100 hover-effect-scale bg-body-tertiary border-0">
                        <div class="card-body text-center px-3">
                            <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(80 / 164 * 100%)">
                                <img src="assets/img/home/cars/body-type/suv.svg" alt="Image">
                            </div>
                            <h3 class="h6 pt-3 mb-1">
                                <a class="hover-effect-underline stretched-link" href="listings-grid-cars.html">SUV</a>
                            </h3>
                            <p class="fs-sm text-body-secondary mb-1 mb-sm-2">2107 offers</p>
                        </div>
                    </article>
                </div>

                <!-- Category -->
                <div class="swiper-slide">
                    <article class="card w-100 hover-effect-scale bg-body-tertiary border-0">
                        <div class="card-body text-center px-3">
                            <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(80 / 164 * 100%)">
                                <img src="assets/img/home/cars/body-type/mpv.svg" alt="Image">
                            </div>
                            <h3 class="h6 pt-3 mb-1">
                                <a class="hover-effect-underline stretched-link" href="listings-grid-cars.html">Family
                                    MPV</a>
                            </h3>
                            <p class="fs-sm text-body-secondary mb-1 mb-sm-2">582 offers</p>
                        </div>
                    </article>
                </div>

                <!-- Category -->
                <div class="swiper-slide">
                    <article class="card w-100 hover-effect-scale bg-body-tertiary border-0">
                        <div class="card-body text-center px-3">
                            <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(80 / 164 * 100%)">
                                <img src="assets/img/home/cars/body-type/pickup.svg" alt="Image">
                            </div>
                            <h3 class="h6 pt-3 mb-1">
                                <a class="hover-effect-underline stretched-link"
                                    href="listings-grid-cars.html">Pickup</a>
                            </h3>
                            <p class="fs-sm text-body-secondary mb-1 mb-sm-2">341 offers</p>
                        </div>
                    </article>
                </div>
            </div>

            <!-- Pagination (Bullets) -->
            <div class="swiper-pagination position-static mt-3"></div>
        </div>
    </section>


    <!-- Top offers -->
    <section class="container pt-2 pt-sm-3 pt-md-4 pt-lg-5 pb-5 my-xxl-3">
        <div class="d-flex align-items-start justify-content-between gap-4 pb-3 mb-2 mb-sm-3">
            <h2 class="mb-0">Top offers</h2>
            <div class="nav">
                <a class="nav-link position-relative fs-base text-nowrap py-1 px-0" href="#!">
                    <span class="hover-effect-underline stretched-link me-1">View all</span>
                    <i class="fi-chevron-right fs-lg"></i>
                </a>
            </div>
        </div>

        <!-- Listings grid -->
        <div class="row">
            <div class="col-lg-5 mb-4 mb-lg-0">

                <!-- Item -->
                <article class="card h-100 hover-effect-scale overflow-hidden">
                    <div class="row flex-lg-column h-100 g-0">
                        <div class="col-sm-5 col-lg-12 position-relative bg-body-tertiary overflow-hidden">
                            <div class="d-lg-none" style="min-height: 220px"></div>
                            <div class="d-none d-lg-block" style="min-height: 260px"></div>
                            <div
                                class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-1 pt-1 pt-sm-0 ps-1 ps-sm-0 mt-2 mt-sm-3 ms-2 ms-sm-3">
                                <span class="badge text-bg-info d-inline-flex align-items-center">
                                    Verified
                                    <i class="fi-shield ms-1"></i>
                                </span>
                                <span class="badge text-bg-warning">Used</span>
                            </div>
                            <img src="assets/img/listings/cars/list/06.jpg"
                                class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 object-fit-cover"
                                alt="Image">
                        </div>
                        <div class="col-sm-7 col-lg-12 d-lg-flex flex-column flex-fill py-md-2">
                            <div class="card-body pb-3 pb-md-4">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <div class="fs-xs text-body-secondary me-3">28/06/2024</div>
                                    <div class="d-flex gap-2 position-relative z-2">
                                        <button type="button"
                                            class="btn btn-icon btn-sm btn-outline-secondary animate-pulse rounded-circle"
                                            data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm"
                                            title="Wishlist" aria-label="Add to wishlist">
                                            <i class="fi-heart animate-target fs-sm"></i>
                                        </button>
                                        <button type="button"
                                            class="btn btn-icon btn-sm btn-outline-secondary animate-shake rounded-circle"
                                            data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Notify"
                                            aria-label="Notify">
                                            <i class="fi-bell animate-target fs-sm"></i>
                                        </button>
                                        <button type="button"
                                            class="btn btn-icon btn-sm btn-outline-secondary animate-rotate rounded-circle"
                                            data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm"
                                            title="Compare" aria-label="Compare">
                                            <i class="fi-repeat animate-target fs-sm"></i>
                                        </button>
                                    </div>
                                </div>
                                <h3 class="h5 mb-2">
                                    <a class="hover-effect-underline stretched-link me-1"
                                        href="single-entry-cars.html">Maserati Granturismo</a>
                                    <span class="fs-sm fw-normal text-body-secondary">(2020)</span>
                                </h3>
                                <div class="h6 mb-0">$73,000</div>
                            </div>
                            <div class="card-footer bg-transparent border-0 pt-0 pb-4">
                                <div
                                    class="d-flex flex-wrap justify-content-between gap-3 border-top fs-sm text-nowrap pt-3 pt-md-4">
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="fi-map-pin"></i>
                                        Los Angeles
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="fi-tachometer"></i>
                                        69K mi
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="fi-gas-pump"></i>
                                        Gasoline
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="fi-gearbox"></i>
                                        Automatic
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-lg-7 d-flex flex-column gap-4">

                <!-- Item -->
                <article class="card hover-effect-scale overflow-hidden">
                    <div class="row g-0">
                        <div class="col-sm-5 position-relative bg-body-tertiary overflow-hidden"
                            style="min-height: 220px">
                            <div
                                class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-1 pt-1 pt-sm-0 ps-1 ps-sm-0 mt-2 mt-sm-3 ms-2 ms-sm-3">
                                <span class="badge text-bg-primary">New</span>
                            </div>
                            <img src="assets/img/listings/cars/list/01.jpg"
                                class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 object-fit-cover"
                                alt="Image">
                        </div>
                        <div class="col-sm-7 py-md-2">
                            <div class="card-body pb-3 pb-md-4">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <div class="fs-xs text-body-secondary me-3">23/10/2024</div>
                                    <div class="d-flex gap-2 position-relative z-2">
                                        <button type="button"
                                            class="btn btn-icon btn-sm btn-outline-secondary animate-pulse rounded-circle"
                                            data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm"
                                            title="Wishlist" aria-label="Add to wishlist">
                                            <i class="fi-heart animate-target fs-sm"></i>
                                        </button>
                                        <button type="button"
                                            class="btn btn-icon btn-sm btn-outline-secondary animate-shake rounded-circle"
                                            data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Notify"
                                            aria-label="Notify">
                                            <i class="fi-bell animate-target fs-sm"></i>
                                        </button>
                                        <button type="button"
                                            class="btn btn-icon btn-sm btn-outline-secondary animate-rotate rounded-circle"
                                            data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm"
                                            title="Compare" aria-label="Compare">
                                            <i class="fi-repeat animate-target fs-sm"></i>
                                        </button>
                                    </div>
                                </div>
                                <h3 class="h5 mb-2">
                                    <a class="hover-effect-underline stretched-link me-1"
                                        href="single-entry-cars.html">Volvo XC90 Sport 4WD</a>
                                    <span class="fs-sm fw-normal text-body-secondary">(2024)</span>
                                </h3>
                                <div class="h6 mb-0">$92,500</div>
                            </div>
                            <div class="card-footer bg-transparent border-0 pt-0 pb-4">
                                <div
                                    class="d-flex flex-wrap justify-content-between gap-3 border-top fs-sm text-nowrap pt-3 pt-md-4">
                                    <div class="d-flex align-items-center justify-content-between gap-3">
                                        <i class="fi-map-pin"></i>
                                        Chicago
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="fi-tachometer"></i>
                                        0 mi
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="fi-gas-pump"></i>
                                        Hybrid
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="fi-gearbox"></i>
                                        Automatic
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Item -->
                <article class="card hover-effect-scale overflow-hidden">
                    <div class="row g-0">
                        <div class="col-sm-5 position-relative bg-body-tertiary overflow-hidden"
                            style="min-height: 220px">
                            <div
                                class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-1 pt-1 pt-sm-0 ps-1 ps-sm-0 mt-2 mt-sm-3 ms-2 ms-sm-3">
                                <span class="badge text-bg-warning">Used</span>
                            </div>
                            <img src="assets/img/listings/cars/list/05.jpg"
                                class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 object-fit-cover"
                                alt="Image">
                        </div>
                        <div class="col-sm-7 py-md-2">
                            <div class="card-body pb-3 pb-md-4">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <div class="fs-xs text-body-secondary me-3">15/07/2024</div>
                                    <div class="d-flex gap-2 position-relative z-2">
                                        <button type="button"
                                            class="btn btn-icon btn-sm btn-outline-secondary animate-pulse rounded-circle"
                                            data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm"
                                            title="Wishlist" aria-label="Add to wishlist">
                                            <i class="fi-heart animate-target fs-sm"></i>
                                        </button>
                                        <button type="button"
                                            class="btn btn-icon btn-sm btn-outline-secondary animate-shake rounded-circle"
                                            data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Notify"
                                            aria-label="Notify">
                                            <i class="fi-bell animate-target fs-sm"></i>
                                        </button>
                                        <button type="button"
                                            class="btn btn-icon btn-sm btn-outline-secondary animate-rotate rounded-circle"
                                            data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm"
                                            title="Compare" aria-label="Compare">
                                            <i class="fi-repeat animate-target fs-sm"></i>
                                        </button>
                                    </div>
                                </div>
                                <h3 class="h5 mb-2">
                                    <a class="hover-effect-underline stretched-link me-1"
                                        href="single-entry-cars.html">Mercedes-Benz Coupe</a>
                                    <span class="fs-sm fw-normal text-body-secondary">(2021)</span>
                                </h3>
                                <div class="h6 mb-0">$115,400</div>
                            </div>
                            <div class="card-footer bg-transparent border-0 pt-0 pb-4">
                                <div
                                    class="d-flex flex-wrap justify-content-between gap-3 border-top fs-sm text-nowrap pt-3 pt-md-4">
                                    <div class="d-flex align-items-center justify-content-between gap-3">
                                        <i class="fi-map-pin"></i>
                                        New York
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="fi-tachometer"></i>
                                        15K mi
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="fi-gas-pump"></i>
                                        Diesel
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="fi-gearbox"></i>
                                        Manual
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>


    <!-- Brands -->
    <section class="container pt-2 pt-sm-3 pt-md-4 pt-lg-5 pb-5 my-xxl-3">

        <!-- Row of logos that turns into carousel on screens < 1200px wide (xl breakpoint) -->
        <div class="swiper pt-1 pt-sm-2 py-lg-2 py-xl-3"
            data-swiper="{
                &quot;slidesPerView&quot;: 3,
                &quot;spaceBetween&quot;: 0,
                &quot;pagination&quot;: {
                    &quot;el&quot;: &quot;.swiper-pagination&quot;,
                    &quot;clickable&quot;: true
                },
                &quot;breakpoints&quot;: {
                    &quot;420&quot;: {
                    &quot;slidesPerView&quot;: 3,
                    &quot;spaceBetween&quot;: 16
                    },
                    &quot;550&quot;: {
                    &quot;slidesPerView&quot;: 4,
                    &quot;spaceBetween&quot;: 16
                    },
                    &quot;730&quot;: {
                    &quot;slidesPerView&quot;: 5,
                    &quot;spaceBetween&quot;: 24
                    },
                    &quot;880&quot;: {
                    &quot;slidesPerView&quot;: 6,
                    &quot;spaceBetween&quot;: 24
                    },
                    &quot;992&quot;: {
                    &quot;slidesPerView&quot;: 7,
                    &quot;spaceBetween&quot;: 24
                    },
                    &quot;1200&quot;: {
                    &quot;slidesPerView&quot;: 8,
                    &quot;spaceBetween&quot;: 24
                    }
                }
            }">
            <div class="swiper-wrapper">

                <!-- Logo -->
                <div class="swiper-slide nav">
                    <a class="nav-link p-0" href="listings-grid-cars.html" data-bs-toggle="tooltip"
                        title="Mercedes-Benz" aria-label="Mercedes-Benz">
                        <svg xmlns="http://www.w3.org/2000/svg" width="141" viewBox="0 0 141 64"
                            fill="currentColor">
                            <path
                                d="M49.967 50.421c-8.552-9.78-9.356-24.048-1.719-34.676C56.643 4.045 72.363.517 84.867 7.684c6.118 3.506 10.584 9.132 12.794 15.764.022.045.022.089.045.134.647 2.099 1.072 4.265 1.228 6.453.982 13.62-8.239 25.99-21.436 29.183-3.706.893-7.636.982-11.387.335-.648-.112-1.384-.313-2.077-.469-.313-.067-.603-.156-.826-.223-5.292-1.563-9.691-4.376-13.241-8.44zm21.458-17.729L93.24 44.951c.045.022.089.022.112-.022l.022-.022c.022-.022 0-.045 0-.067L74.216 30.75c-.045-.022-.045-.045 0-.067l1.273-.737c.067-.045.134-.022.179.022l17.394 14.268c.022.022.067.022.067 0 3.037-5.671 3.974-12.258 2.344-18.51C92.615 14.629 82.88 7.126 71.537 6.68c-.045 0-.067.022-.067.067l3.662 22.284c0 .045 0 .067-.045.089l-3.662 2.166c-.022 0-.045 0-.045-.022v-.022l-.29-24.986c0-.045-.022-.067-.067-.067h-.045c-.045 0-.067.022-.067.067l-2.635 23.601c0 .022-.022.022-.022.022l-1.317-.737c-.045-.022-.067-.067-.067-.134l3.707-22.217c0-.045 0-.067-.045-.067l-2.389.134C56.599 8.265 47.466 17.196 45.926 28.74c-.715 5.337.447 10.673 2.903 15.429.022.022.045.045.089.022l17.416-14.29c.045-.022.067-.045.112 0l1.317.759c.045.022.045.045 0 .089L48.672 44.772c-.045.045-.067.089-.045.156l.022.045c.022.022.045.045.067.045l21.793-12.281h.045v.022l-.045 4.287c0 .045-.022.067-.067.089L49.364 45.04c-.067.022-.089.067-.045.134 4.242 6.944 11.723 11.544 19.895 12.057a24.57 24.57 0 0 0 5.761-.268c3.662-.603 7.011-1.943 10.07-3.997a25.32 25.32 0 0 0 7.502-7.815c.022-.022 0-.067-.022-.089l-21.078-7.927c-.045-.022-.045-.045-.045-.089l-.067-4.287c.045-.089.067-.089.089-.067zm-1.831-2.009l1.116-18.309c0-.022.022-.022.022-.022h.067c.022 0 .022.022.022.022l-.223 18.89c0 .022-.022.022-.022.022h-.022l-.96-.603zm2.255 1.295l1.183-.67h.022l16.277 10.941.022.022v.067c0 .022-.022.022-.022.022L71.894 32.022c-.067 0-.067-.022-.045-.045zm-1.675.044l-5.381 3.193h-.022l-.022-.022c-.022-.022 0-.045 0-.045l4.466-3.662c.022-.022.045-.022.089 0l.871.491c.022.022.022.022 0 .045z">
                            </path>
                        </svg>
                    </a>
                </div>

                <!-- Logo -->
                <div class="swiper-slide nav">
                    <a class="nav-link p-0" href="listings-grid-cars.html" data-bs-toggle="tooltip" title="Opel"
                        aria-label="Opel">
                        <svg xmlns="http://www.w3.org/2000/svg" width="141" viewBox="0 0 141 64"
                            fill="currentColor">
                            <path
                                d="M43.002 29.718l-6.327-.386c-.676-.048-.893-.459-.483-1.014l1.473-2.028c.217-.314.652-.362 1.063-.362h4.854c.048 0 .048-.024.072-.048l.362-1.521C47.566 12.186 58.65 3.734 71.521 4c8.476.169 16.566 4.25 21.661 11.012 3.84 5.12 5.771 10.939 5.747 17.459 0 .29-.024.845-.072 1.69 0 .048.024.048.048.072l6.351.41c.676.048.87.459.483 1.014l-1.473 2.028c-.169.217-.507.362-.821.362h-5.143c-.024 0-.024 0-.048.024-1.376 5.892-4.323 10.867-8.814 14.899-7.124 6.375-17.507 8.645-26.66 5.82-11.977-3.695-20.043-14.779-19.826-27.312 0-.241.024-.821.072-1.714.024-.024.024-.048-.024-.048zm40.545-2.994l-8.645 5.94c-.048.048-.048.048.024.072l19.947 1.28c.024 0 .048-.024.048-.048.072-.628.097-1.376.072-2.197a24.13 24.13 0 0 0-2.994-11.301c-2.222-4.057-5.409-7.22-9.611-9.539-3.55-1.956-7.341-2.946-11.398-2.97-10.818-.048-20.478 7.486-23.255 17.918 0 .024 0 .048.024.048h.024 35.329c.169 0 .29.024.362.048.29.145.338.555.072.749zM58.481 38.001c-.459-.314-.193-.652.145-.893l8.428-5.844c.048-.024.048-.048-.024-.048l-19.995-1.232c-.024 0-.048.024-.048.048-.966 12.799 8.138 24.028 20.816 25.815.845.121 1.763.169 2.656.193.628.024 1.232-.024 1.859-.048 10.36-.556 19.126-8.017 21.83-17.87 0-.048 0-.048-.048-.048H58.602c-.024-.024-.072-.048-.121-.073z">
                            </path>
                        </svg>
                    </a>
                </div>

                <!-- Logo -->
                <div class="swiper-slide nav">
                    <a class="nav-link p-0" href="listings-grid-cars.html" data-bs-toggle="tooltip"
                        title="Volkswagen" aria-label="Volkswagen">
                        <svg xmlns="http://www.w3.org/2000/svg" width="141" viewBox="0 0 141 64"
                            fill="currentColor">
                            <path
                                d="M99 32.011c0 15.468-12.543 28.011-28.01 28.011C55.543 60 43 47.478 43 32.011S55.543 4 71.011 4 99 16.543 99 32.011zm-2.504 0c0-14.079-11.427-25.485-25.485-25.485S45.525 17.932 45.525 32.011 56.931 57.496 71.01 57.496s25.485-11.427 25.485-25.485zM76.545 13.028l-5.514 12.248c0 .021-.021.021-.042.021l-.021-.021-5.535-12.269c0-.021 0-.042.021-.063 3.683-1.031 7.366-1.031 11.048 0 .042 0 .063.042.042.084zm-2.166 18.393l7.239-16.12c.021-.021.042-.042.063-.021a19.78 19.78 0 0 1 5.282 4.967c.021.042.042.084.021.126l-9.091 20.119c0 .021-.021.021-.042.021l-.021-.021-3.472-7.744c-.021-.021-.042-.042-.063-.042h-6.566c-.042 0-.084.021-.105.063l-3.472 7.723c0 .021-.021.021-.042.021 0 0-.021 0-.021-.021l-9.07-20.14c-.021-.042-.021-.084.021-.126 1.452-1.978 3.22-3.62 5.282-4.946.021-.021.063 0 .063.021l7.261 16.12c0 .021.042.042.063.042h6.608c.042 0 .063-.021.063-.042zM62.089 49.73c-4.02-2.083-7.008-5.135-8.965-9.133-2.02-4.146-2.547-9.176-1.305-13.658.021-.063.042-.063.063 0l10.249 22.749c.021.063 0 .084-.042.042zm17.802-.042L90.14 27.002c.021-.063.063-.063.063 0 2.315 9.07-1.894 18.477-10.27 22.728-.063.021-.063.021-.042-.042zm-14.352 1.326l5.451-12.08c0-.021.021-.021.042-.021 0 0 .021 0 .021.021l5.451 12.101c0 .021 0 .042-.021.042a19.91 19.91 0 0 1-10.88 0c-.063 0-.084-.021-.063-.063z">
                            </path>
                        </svg>
                    </a>
                </div>

                <!-- Logo -->
                <div class="swiper-slide nav">
                    <a class="nav-link p-0" href="listings-grid-cars.html" data-bs-toggle="tooltip" title="Toyota"
                        aria-label="Toyota">
                        <svg xmlns="http://www.w3.org/2000/svg" width="141" viewBox="0 0 141 64"
                            fill="currentColor">
                            <path
                                d="M69.46 8h2.079c3.632.118 7.192.473 10.752 1.207 5.71 1.183 11.373 3.408 16.128 6.793 3.752 2.675 7.144 6.367 8.65 10.769 3.154 9.278-2.485 17.444-10.107 22.225-4.994 3.148-10.704 5.136-16.51 6.154-8.96 1.562-18.326 1.065-26.999-1.728a41.34 41.34 0 0 1-9.605-4.521c-6.284-4.024-11.612-10.556-10.776-18.438.693-6.698 5.471-11.976 10.967-15.432 7.001-4.426 15.483-6.556 23.726-6.911.573-.071 1.147-.095 1.696-.118zm5.567 3.006c-4.946-.355-10.059-.142-14.933.757-1.983.355-3.895.899-5.782 1.61-1.983.757-5.185 2.319-5.663 4.639-.741 3.621 5.352 5.87 7.908 6.58 1.864.521 3.608.899 5.209 1.136.024 0 .048 0 .048-.047.502-3.314 1.386-6.651 2.987-9.633 1.242-2.319 3.512-5.136 6.571-4.473 2.58.568 4.396 3.479 5.376 5.68 1.195 2.675 1.935 5.538 2.365 8.426 0 .024.024.047.048.047 1.911-.284 3.775-.71 5.615-1.254 2.413-.734 5.567-1.965 7.025-4.095 1.171-1.728.358-3.527-1.099-4.734-1.29-1.065-2.891-1.87-4.516-2.438-3.536-1.278-7.383-1.941-11.158-2.201zM65.351 26.13c3.417.284 6.905.308 10.298 0 .024 0 .048-.024.048-.047-.335-2.248-.932-4.521-2.031-6.532-.645-1.207-1.888-2.698-3.465-2.509-1.959.237-3.249 3.03-3.823 4.639a23.68 23.68 0 0 0-1.075 4.402c0 .047.024.047.048.047zM43.106 43.172c6.236 6.746 15.984 9.941 24.968 10.391.048 0 .048 0 0-.024-2.294-1.538-3.727-4.402-4.635-6.935-1.649-4.686-2.222-9.775-2.126-14.745 0-.024-.024-.047-.048-.047-4.492-.734-8.888-1.893-12.878-4.118-2.867-1.586-5.83-4.095-6.117-7.598 0-.024-.024-.047-.048 0-1.792 2.201-3.154 4.734-3.799 7.503-1.266 5.752.717 11.29 4.683 15.574zm55.599-23.077c-.406 5.325-7.12 8.497-11.493 9.917a44.89 44.89 0 0 1-7.502 1.775c-.024 0-.048.024-.048.047.096 3.905-.287 7.834-1.195 11.645-.621 2.556-1.577 5.183-3.034 7.408-.693 1.065-1.529 1.941-2.509 2.627-.024 0-.024.024 0 .024 7.144-.331 14.312-2.367 20.285-6.367 5.83-3.905 10.369-10.225 9.676-17.515-.334-3.55-1.863-6.864-4.133-9.609-.024 0-.048 0-.048.047zM64.897 32.284c.048 3.479.573 7.219 1.983 10.414.645 1.444 2.055 3.669 3.942 3.385 1.935-.284 3.249-3.03 3.799-4.639 1.004-3.03 1.434-6.059 1.481-9.183 0-.024 0-.024-.024-.024-3.703.331-7.407.308-11.11 0-.048 0-.048 0-.072.047 0-.024 0-.024 0 0z">
                            </path>
                        </svg>
                    </a>
                </div>

                <!-- Logo -->
                <div class="swiper-slide nav">
                    <a class="nav-link p-0" href="listings-grid-cars.html" data-bs-toggle="tooltip" title="Citroen"
                        aria-label="Citroen">
                        <svg xmlns="http://www.w3.org/2000/svg" width="141" viewBox="0 0 141 64"
                            fill="currentColor">
                            <path
                                d="M70.512 8h.283c1.288.103 2.576.696 3.684 1.34 2.035 1.185 3.942 2.628 5.745 4.122l5.565 4.973c3.221 3.092 6.364 6.261 9.353 9.559 1.056 1.159 1.958 2.654 2.087 4.251.026.283.026.644.026 1.134l-.103 2.705c-.026.386-.052.876-.309 1.134-.309.361-.721.155-1.005-.103-3.736-3.246-7.755-6.467-11.826-9.353-2.087-1.494-4.303-2.937-6.596-4.2-1.469-.825-3.014-1.572-4.612-2.061-1.056-.335-2.138-.464-3.246-.283-.825.155-1.701.412-2.628.799-2.035.85-4.045 1.984-5.874 3.169-1.829 1.159-3.607 2.37-5.333 3.659a160.89 160.89 0 0 0-10.358 8.322c-.077.051-.154.103-.258.154-.799.361-.979-.696-1.005-1.211A127.88 127.88 0 0 1 44 32.966c0-.438.026-.773.077-1.056.206-1.159.721-2.216 1.417-3.169.155-.206.386-.464.696-.799 3.71-4.045 7.575-7.961 11.62-11.646 1.829-1.649 3.71-3.246 5.668-4.741 1.469-1.108 3.04-2.139 4.663-2.911.721-.309 1.546-.567 2.37-.644zM46.937 29.54c-.696.618-1.159 1.52-1.314 2.422-.051.361-.051.876-.026 1.211.026.567.026 1.108.052 1.675 0 0 0 .026.026.026h.026c3.169-2.731 6.441-5.308 9.816-7.755 2.808-2.035 5.72-3.968 8.812-5.539 1.262-.644 2.448-1.159 3.556-1.494a13.38 13.38 0 0 1 1.829-.438c1.134-.18 2.293 0 3.375.309 2.035.593 3.993 1.572 5.849 2.628 1.726 1.005 3.427 2.061 5.076 3.221 4.045 2.808 7.91 5.849 11.646 9.069.026.026.051.026.051-.026.026-.541.026-1.082.052-1.649 0-.464 0-.824-.052-1.056-.206-1.185-.876-2.216-1.675-3.092-3.659-4.019-7.704-8.116-11.852-11.878-2.164-1.958-4.406-3.839-6.802-5.488-.824-.567-1.649-1.056-2.551-1.494-.644-.309-1.417-.618-2.138-.618-.026 0-.026 0-.026.026v2.216c0 .721 0 1.469-.18 2.164-.232.876-.953 1.262-1.726 1.597-.696.309-1.417.593-2.087.928-1.675.773-3.324 1.649-4.998 2.576-5.308 2.963-10.254 6.441-14.738 10.461zm11.131 16.231c-4.406 3.066-8.605 6.441-12.676 9.971-.721.644-1.211-.052-1.237-.747-.103-1.572-.155-2.886-.129-3.942 0-.489.129-1.005.335-1.597a8.58 8.58 0 0 1 1.778-2.886c3.556-3.89 7.291-7.678 11.182-11.233 1.984-1.829 3.994-3.556 6.106-5.127 1.031-.773 2.061-1.469 3.117-2.113 1.031-.618 2.216-1.211 3.375-1.469 1.056-.232 2.216.103 3.195.541 2.19 1.005 4.2 2.473 6.081 3.968 1.675 1.34 3.324 2.757 4.895 4.2 3.813 3.53 7.601 7.369 11.13 11.182.309.335.541.593.696.799.721 1.005 1.34 2.242 1.443 3.478.026.232.026.567.026 1.005l-.103 2.963c-.026.773-.386 1.726-1.34.902-3.891-3.375-7.91-6.596-12.11-9.559-2.164-1.52-4.38-2.989-6.725-4.251-1.056-.567-2.164-1.082-3.272-1.52-.876-.335-1.675-.541-2.396-.644-1.005-.129-1.958.052-2.911.335-1.108.335-2.164.773-3.195 1.288-2.576 1.314-5.024 2.886-7.266 4.457zm12.573-15.175c0 .747-.026 1.237-.155 1.829-.154.799-.696 1.211-1.391 1.52-.927.438-1.726.747-2.783 1.237-.335.155-.644.309-.953.464A83.74 83.74 0 0 0 47.04 47.987c-.309.258-.515.49-.67.696-.567.773-.825 1.597-.825 2.551 0 .721.026 1.469.052 2.19 2.654-2.293 5.411-4.483 8.219-6.596 3.169-2.37 6.441-4.612 9.919-6.467 1.726-.928 3.607-1.778 5.54-2.139.953-.18 1.881-.18 2.834.026 1.494.309 2.963.902 4.354 1.597 2.576 1.263 5.05 2.808 7.42 4.457 4.071 2.808 7.987 5.9 11.723 9.121.026.026.026.026.026-.026.026-.541.026-1.082.052-1.649 0-.464 0-.799-.052-1.031-.18-1.185-.876-2.267-1.675-3.143-3.35-3.684-6.853-7.24-10.486-10.641-2.551-2.37-5.204-4.663-8.064-6.673-.799-.567-1.623-1.056-2.499-1.494-.696-.361-1.494-.67-2.293-.696-.026 0-.026 0-.026.026.077.876.077 1.675.052 2.499z">
                            </path>
                        </svg>
                    </a>
                </div>

                <!-- Logo -->
                <div class="swiper-slide nav">
                    <a class="nav-link p-0" href="listings-grid-cars.html" data-bs-toggle="tooltip"
                        title="Land Rover" aria-label="Land Rover">
                        <svg xmlns="http://www.w3.org/2000/svg" width="141" viewBox="0 0 141 64"
                            fill="currentColor">
                            <path
                                d="M69.103 8h1.905l1.519.028c6.241.168 12.482 1.034 18.503 2.682 4.17 1.146 8.257 2.738 12.013 4.889 2.651 1.509 5.192 3.381 7.319 5.616 2.485 2.598 4.28 5.811 4.667 9.471v2.626c-.58 5.56-4.419 9.918-8.755 12.992-3.258 2.319-6.904 4.107-10.659 5.476-7.125 2.598-14.747 3.856-22.314 4.135-.387.028-1.105.028-2.126.056h-2.264c-.497-.028-.994-.028-1.491-.056-5.91-.168-11.82-.95-17.564-2.459-5.413-1.425-10.742-3.548-15.382-6.706-3.093-2.095-5.965-4.778-7.76-8.102-1.077-1.956-1.629-4.051-1.712-6.286v-.754c.028-.307.028-.643.055-.95a14.19 14.19 0 0 1 1.933-5.811c1.574-2.682 3.756-4.861 6.186-6.706 3.148-2.375 6.683-4.191 10.356-5.588 4.087-1.565 8.285-2.682 12.593-3.409 3.563-.615 7.153-.978 10.77-1.09L69.103 8zM34.61 20.07c-4.336 3.241-8.119 8.102-7.014 13.942.607 3.297 2.762 6.23 5.219 8.41 2.43 2.151 5.275 3.912 8.23 5.309 4.087 1.928 8.45 3.297 12.841 4.219 2.844.587 5.744 1.034 8.644 1.285a83.42 83.42 0 0 0 18.475-.391c3.977-.531 7.898-1.369 11.737-2.598a50.64 50.64 0 0 0 7.843-3.269c2.098-1.09 4.114-2.375 5.965-3.884 2.43-2.012 4.694-4.694 5.633-7.739 1.685-5.42-.939-10.254-4.86-13.774-1.85-1.676-3.922-3.045-6.103-4.247-3.673-1.984-7.622-3.465-11.654-4.526a74.38 74.38 0 0 0-9.527-1.816 84.34 84.34 0 0 0-18.392-.168c-2.347.251-4.722.587-7.097 1.062-4.695.95-9.224 2.347-13.477 4.359-2.265 1.062-4.446 2.319-6.462 3.828zm51.449 30.37c-8.202 1.732-16.68 2.04-24.992 1.118-6.876-.754-13.753-2.431-19.994-5.476-3.176-1.565-6.241-3.548-8.671-6.175-1.657-1.788-3.038-4.023-3.397-6.51-.967-6.482 4.833-11.427 9.748-14.249 5.468-3.129 11.599-5.029 17.785-6.091 7.871-1.369 15.962-1.481 23.86-.475 5.192.67 10.356 1.872 15.216 3.828 3.563 1.425 7.042 3.269 9.997 5.727 2.513 2.068 4.778 4.834 5.385 8.158.967 5.225-2.568 9.499-6.406 12.377-1.989 1.509-4.143 2.738-6.407 3.8-3.839 1.816-7.926 3.101-12.123 3.967zM30.027 30.491c-.884 4.861 2.624 8.857 6.158 11.483 1.961 1.453 4.115 2.682 6.324 3.688 3.424 1.565 7.014 2.738 10.687 3.576 3.314.754 6.656 1.257 10.052 1.537a80.34 80.34 0 0 0 17.95-.503c3.535-.503 7.042-1.257 10.466-2.347 2.706-.866 5.33-1.956 7.843-3.269 2.707-1.425 5.33-3.185 7.429-5.448 1.408-1.537 2.568-3.325 3.01-5.364 1.16-5.197-2.706-9.416-6.49-12.126-2.043-1.453-4.225-2.654-6.489-3.66-3.507-1.565-7.235-2.71-10.963-3.52-3.314-.699-6.711-1.173-10.135-1.425a82.67 82.67 0 0 0-15.106.307c-6.655.754-13.283 2.403-19.359 5.392a37.59 37.59 0 0 0-5.496 3.353c-2.623 2.068-5.275 4.862-5.882 8.326zm17.84-3.017l4.225.028s.028 0 .028.028l-.856 2.543s0 .028-.028.028h-7.263c-.028 0-.028 0-.028-.028l3.203-9.499c.055-.196.083-.335.111-.503 0-.224-.166-.391-.304-.531 0 0-.028-.028 0-.056l.055-.224a.06.06 0 0 1 .055-.056h3.59s.028 0 .028.028l-2.817 8.242zm11.791.195h-3.176c-.028 0-.028 0-.055.028l-1.326 2.347-.028.028h-3.065s-.028 0-.028-.028l5.44-9.192c.138-.224.414-.698.414-.95 0-.168-.11-.251-.221-.363 0 0-.028-.028 0-.056l.055-.224c0-.028.028-.028.055-.028h4.17c.028 0 .028 0 .028.028l.608 10.813s0 .028-.028.028h-2.789c-.028 0-.028 0-.028-.028l-.028-2.403h0zm-1.933-2.263c-.028.028-.028.056-.028.056 0 .028 0 .028.028.028h1.878a.06.06 0 0 0 .055-.056l-.055-3.185v-.056c-.028-.028-.055-.028-.083.028v.028l-1.795 3.157zm10.492-2.319l-2.32 6.957c0 .028-.028.028-.028.028h-2.623c-.028 0-.028 0-.028-.028l3.203-9.471c.055-.196.11-.363.11-.559s-.138-.307-.276-.447c-.055-.056 0-.252.055-.307 0-.028.028-.028.028-.028h3.701c.028 0 .055.028.055.028l1.105 5.784c0 .056.028.056.055 0l1.933-5.783c0-.028.028-.028.028-.028h2.762s.028 0 .028.028L72.36 30.072s0 .028-.028.028h-2.651c-.028 0-.028 0-.028-.028l-1.436-6.985c.028-.028.028-.028 0 0zm15.55 4.247c-.608 1.201-1.519 2.151-2.817 2.487a7.88 7.88 0 0 1-2.044.252c-1.602-.028-3.203 0-4.805 0 0 0-.028 0-.028-.028l3.231-9.527c.055-.196.11-.363.11-.531 0-.195-.193-.363-.304-.503v-.028l.055-.224c0-.028.028-.028.055-.028h4.336c2.32 0 3.839 1.229 3.563 3.716-.166 1.509-.663 3.045-1.353 4.414zm-3.921-5.532l-1.933 5.644v.028c.663 0 1.353.056 1.988-.084.828-.168 1.243-1.006 1.546-1.76.304-.782.552-1.509.718-2.179.138-.503.248-1.201-.331-1.509-.331-.168-.635-.14-1.132-.14h-.856zm12.067 3.912c.055-.028.055-.028 0 0l-4.86-.028s-.028 0-.028-.028l.911-2.514a.06.06 0 0 1 .055-.056h7.07s.028 0 .028.028l-.967 2.71c0 .028-.028.028-.028.028l-8.036 2.682c-.028 0-.028 0-.028-.028l.304-.838a.06.06 0 0 1 .055-.056l5.523-1.9z">
                            </path>
                            <path
                                d="M62.586 43.455c-.718.028-1.436-.028-2.126-.252-1.464-.503-2.071-1.816-1.933-3.297.111-1.173.414-2.347.829-3.465.276-.726.607-1.509 1.049-2.123.801-1.118 1.878-1.76 3.286-1.928.635-.084 1.27-.112 1.961-.056 1.823.084 3.176 1.062 3.259 2.99.028.475-.028 1.006-.166 1.648-.276 1.397-.746 2.822-1.436 4.051-.608 1.062-1.436 1.788-2.541 2.151-.69.196-1.436.252-2.182.279zm-.442-6.677l-.608 1.704c-.138.447-.248.922-.276 1.397-.028 1.006 1.132 1.034 1.823.922a2.75 2.75 0 0 0 .801-.251c.718-.391 1.077-1.369 1.353-2.096.276-.754.58-1.565.663-2.375.055-.419 0-.81-.359-1.034-.387-.251-1.077-.224-1.574-.14-1.022.196-1.464.978-1.823 1.872zm21.013-.14h3.728s.028 0 .028.028l-.801 2.235c0 .028-.028.028-.028.028h-3.673c-.028 0-.028 0-.055.028l-.608 1.76c0 .028 0 .028.028.028h4.142c.028 0 .028 0 .028.028l-.856 2.459c0 .028-.028.028-.028.028H77.91c-.028 0-.028 0-.028-.028l3.148-9.248c.11-.335.304-.782.055-1.034-.055-.084-.138-.14-.193-.196-.028-.028-.028-.028 0-.056l.083-.252c0-.028.028-.028.055-.028h7.65s.028 0 .028.028l-.884 2.459c0 .028-.028.028-.028.028h-4.032s-.028 0-.028.028l-.58 1.676c-.028 0-.028 0 0 0zm-27.919 2.794c-.028 0-.028 0 0 0-.028.028-.028.028 0 0l1.381 3.828v.028h-2.927s-.028 0-.028-.028l-1.105-3.716s0-.028-.028-.028h-.966s-.028 0-.028.028l-1.243 3.716c0 .028-.028.028-.028.028h-2.9c-.028 0-.028 0-.028-.028l3.259-9.555c.083-.252.138-.531-.028-.726-.055-.084-.111-.14-.193-.224l-.028-.028c0-.056.028-.279.138-.279h4.805c.69 0 1.519.168 2.126.531.58.363.884 1.034.911 1.704.055.922-.221 1.788-.58 2.654-.276.671-.718 1.313-1.353 1.704-.359.196-.746.307-1.16.391zm-2.154-4.498l-.746 2.207v.028l1.657-.028a2.51 2.51 0 0 0 .525-.056c.69-.14.884-.838.994-1.453.055-.307-.055-.559-.331-.671-.083-.028-.166-.056-.248-.056h-1.823c-.028 0-.028 0-.028.028zm20.022 5.28c.028.028.055.028.083 0l3.894-7.739c0-.028.028-.028.055-.028h2.983s.028 0 .028.028l-5.882 10.813c0 .028-.028.028-.055.028h-3.59c-.028 0-.055 0-.055-.028l-.442-9.108c-.028-.643 0-1.09-.635-1.397-.028 0-.028-.028-.028-.056l.083-.196c0-.028.028-.028.055-.028h3.231s.028 0 .028.028l.193 7.739c.028-.084.028-.056.055-.056zm21.57-.81c-.028 0-.028.028-.028.056l1.381 3.772s0 .028-.028.028h-2.9c-.028 0-.028 0-.028-.028l-1.105-3.716s0-.028-.028-.028h-.967-.028l-1.243 3.716s0 .028-.028.028h-2.9c-.028 0-.028-.028-.028-.028l3.203-9.36c.083-.196.166-.531.138-.699-.028-.195-.166-.307-.304-.447l-.028-.028c0-.084.055-.279.138-.279h.028 4.778a4.62 4.62 0 0 1 1.546.251c1.574.531 1.712 2.04 1.326 3.465-.414 1.565-1.16 3.101-2.9 3.297zm-2.182-4.47l-.746 2.207v.028h1.491c.635 0 1.188-.056 1.436-.698.166-.363.469-1.145-.028-1.425a.66.66 0 0 0-.359-.112h-1.795c.028-.028 0-.028 0 0zm-50.732 1.704c-.055.028-.055.028 0 .028h4.833s.028 0 .028.028l-.911 2.515c0 .028-.028.028-.055.028h-7.07s-.028 0-.028-.028l.967-2.682a.06.06 0 0 1 .055-.056l8.009-2.654s.028 0 .028.028v.028l-.304.838c0 .028-.028.056-.083.056l-5.468 1.872z">
                            </path>
                        </svg>
                    </a>
                </div>

                <!-- Logo -->
                <div class="swiper-slide nav">
                    <a class="nav-link p-0" href="listings-grid-cars.html" data-bs-toggle="tooltip" title="Honda"
                        aria-label="Honda">
                        <svg xmlns="http://www.w3.org/2000/svg" width="141" viewBox="0 0 141 64"
                            fill="currentColor">
                            <path
                                d="M94.78 10.073c3.104 2.099 4.086 5.448 4.309 8.976l.223 6.073v1.183c-.067 3.707-.402 7.391-.849 11.075-.246 1.987-.581 3.952-1.027 5.917-.38 1.697-1.005 3.439-1.898 4.935-.648 1.072-1.541 1.92-2.546 2.635-1.496 1.049-3.439 1.652-5.225 2.01-1.853.38-3.573.581-5.605.715-2.054.134-4.086.246-6.14.29a196.51 196.51 0 0 1-14.96-.156c-1.92-.089-3.751-.223-5.493-.424-1.987-.223-4.108-.692-5.962-1.429-1.965-.782-3.729-2.21-4.734-4.086-1.005-1.853-1.563-3.93-1.965-6.006-.357-1.876-.625-3.483-.759-4.868l-.268-2.546c-.514-4.734-.648-9.49-.447-14.246.067-2.233.313-4.51 1.317-6.565 1.608-3.305 4.756-4.801 8.195-5.47 1.675-.335 3.126-.514 5.18-.692 6.207-.536 12.504-.625 18.622-.514a177.16 177.16 0 0 1 7.435.335c2.121.134 4.086.335 5.872.581.491.067 1.139.201 1.965.38 1.697.357 3.327.938 4.756 1.898zm-50.061 7.279c-.179 1.273-.313 2.545-.357 3.841-.134 3.104-.134 6.207.045 9.289.134 2.322.335 4.667.625 6.967a55.12 55.12 0 0 0 .804 4.734 22.16 22.16 0 0 0 1.072 3.394c.714 1.719 1.764 3.104 3.394 4.041 1.206.715 2.546 1.117 3.93 1.362 2.657.491 5.359.692 8.061.804a177.8 177.8 0 0 0 16.545-.045c2.523-.112 5.024-.313 7.525-.782 2.947-.558 5.493-1.786 6.9-4.577a16.31 16.31 0 0 0 1.027-2.612c.536-1.876.893-3.818 1.139-5.806.29-2.3.514-4.6.692-6.922.246-3.483.246-7.19 0-11.097-.134-2.121-.402-4.376-1.541-6.23-1.496-2.434-4.131-3.483-6.833-3.952-2.478-.424-5.002-.67-7.525-.826-5.783-.357-11.454-.38-17.394-.134-2.903.112-5.828.357-8.708.759-3.483.491-6.967 1.384-8.574 4.912a12.4 12.4 0 0 0-.826 2.88zm33.427 29.296c-.469-1.719-.96-3.461-1.764-5.024-.67-1.317-1.742-1.809-3.148-2.032-2.01-.313-4.108-.268-6.118.045-1.183.179-2.21.715-2.791 1.742-.357.603-.692 1.362-.983 2.233-.737 2.211-1.295 4.51-1.876 6.766 0 .045-.045.067-.089.067l-3.171-.134-2.523-.246c-.022 0-.045-.022-.045-.067l-2.702-38.874c0-.022 0-.022.022-.045 1.295-.156 2.59-.223 3.93-.268.022 0 .045.022.045.045l1.608 7.302 2.277 9.445c.38 1.496.804 3.037 1.407 4.443.915 2.099 2.411 3.461 4.689 3.863 1.027.179 2.01.223 3.104.223 1.206.022 2.255-.022 3.349-.201 2.144-.335 3.751-1.496 4.689-3.461.804-1.675 1.317-3.55 1.764-5.337l2.01-8.15 1.786-8.15c0-.022.022-.022.022-.022 1.317.022 2.635.112 3.93.268.022 0 .045.022.045.045l-2.702 38.874c0 .022-.022.067-.067.067a67.52 67.52 0 0 1-5.605.38c-.089 0-.134-.022-.156-.089a99.65 99.65 0 0 0-.938-3.706z">
                            </path>
                        </svg>
                    </a>
                </div>

                <!-- Logo -->
                <div class="swiper-slide nav">
                    <a class="nav-link p-0" href="listings-grid-cars.html" data-bs-toggle="tooltip" title="Lexus"
                        aria-label="Lexus">
                        <svg xmlns="http://www.w3.org/2000/svg" width="141" viewBox="0 0 141 64"
                            fill="currentColor">
                            <path
                                d="M96.884 39.085c1.277-1.963 1.963-4.116 2.035-6.482.331-10.007-5.536-16.181-14.052-20.156-.024-.024-.047-.047-.024-.071l1.325-1.893c.047-.047.095-.071.142-.047 7.405 2.484 13.934 7.901 16.418 15.377 1.963 5.938.993 12.112-2.39 17.317-.544.828-1.112 1.443-2.2 1.443l-34.35.024c-3.525 0-7.925-1.467-8.351-5.583-.331-3.312 1.703-6.482 3.525-9.084 4.235-6.032 8.611-11.97 13.082-17.837.237-.308.355-.591.331-.804-.024-.568-.615-.71-1.112-.71-7.357.118-14.999 2.011-20.771 6.813-5.228 4.353-8.351 10.93-7.144 17.79 1.68 9.676 9.699 15.448 18.949 17.175 9.865 1.845 22.663.899 30.541-6.08.047-.047.118-.071.189-.071h4.85c.095 0 .095.024.047.095-8.99 9.818-25.266 10.977-37.402 8.753-10.314-1.892-20.037-8.091-22.119-19.091a19.81 19.81 0 0 1 .544-9.912c3.075-9.723 12.278-15.306 21.788-17.104 7.239-1.372 14.454-1.254 21.646.331 1.136.26 2.035 1.23 1.159 2.318-6.198 7.83-12.396 15.661-17.293 24.39-.71 1.254-.355 3.194 1.396 3.194l29.169-.047c0 .024.047 0 .071-.047z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Pagination (Bullets) -->
            <div class="swiper-pagination position-static mt-3"></div>
        </div>
    </section>


    <!-- Popular categories -->
    <section class="container pt-2 pt-sm-3 pt-md-4 pt-lg-5 pb-5 my-xxl-3">
        <h2 class="text-center pb-2 pb-sm-3 pb-lg-4 mb-xl-4">Currently in demand</h2>

        <!-- Row of items that turns into carousel on screens < 992px wide (lg breakpoint) -->
        <div class="swiper"
            data-swiper="{
                &quot;slidesPerView&quot;: 2,
                &quot;spaceBetween&quot;: 24,
                &quot;pagination&quot;: {
                    &quot;el&quot;: &quot;.swiper-pagination&quot;,
                    &quot;clickable&quot;: true
                },
                &quot;breakpoints&quot;: {
                    &quot;500&quot;: {
                    &quot;slidesPerView&quot;: 3
                    },
                    &quot;768&quot;: {
                    &quot;slidesPerView&quot;: 4
                    },
                    &quot;992&quot;: {
                    &quot;slidesPerView&quot;: 5
                    }
                }
            }">
            <div class="swiper-wrapper">

                <!-- Category -->
                <div class="swiper-slide">
                    <article class="hover-effect-scale position-relative text-center">
                        <div class="bg-body-tertiary rounded-circle overflow-hidden mx-auto" style="width: 132px">
                            <div class="ratio ratio-1x1 hover-effect-target">
                                <img src="assets/img/home/cars/categories/01.jpg" alt="Image">
                            </div>
                        </div>
                        <h3 class="h6 pt-3 mb-0">
                            <a class="hover-effect-underline stretched-link" href="listings-grid-cars.html">Electric
                                cars</a>
                        </h3>
                    </article>
                </div>

                <!-- Category -->
                <div class="swiper-slide">
                    <article class="hover-effect-scale position-relative text-center">
                        <div class="bg-body-tertiary rounded-circle overflow-hidden mx-auto" style="width: 132px">
                            <div class="ratio ratio-1x1 hover-effect-target">
                                <img src="assets/img/home/cars/categories/02.jpg" alt="Image">
                            </div>
                        </div>
                        <h3 class="h6 pt-3 mb-0">
                            <a class="hover-effect-underline stretched-link" href="listings-grid-cars.html">New
                                cars</a>
                        </h3>
                    </article>
                </div>

                <!-- Category -->
                <div class="swiper-slide">
                    <article class="hover-effect-scale position-relative text-center">
                        <div class="bg-body-tertiary rounded-circle overflow-hidden mx-auto" style="width: 132px">
                            <div class="ratio ratio-1x1 hover-effect-target">
                                <img src="assets/img/home/cars/categories/03.jpg" alt="Image">
                            </div>
                        </div>
                        <h3 class="h6 pt-3 mb-0">
                            <a class="hover-effect-underline stretched-link" href="listings-grid-cars.html">City
                                cars</a>
                        </h3>
                    </article>
                </div>

                <!-- Category -->
                <div class="swiper-slide">
                    <article class="hover-effect-scale position-relative text-center">
                        <div class="bg-body-tertiary rounded-circle overflow-hidden mx-auto" style="width: 132px">
                            <div class="ratio ratio-1x1 hover-effect-target">
                                <img src="assets/img/home/cars/categories/04.jpg" alt="Image">
                            </div>
                        </div>
                        <h3 class="h6 pt-3 mb-0">
                            <a class="hover-effect-underline stretched-link" href="listings-grid-cars.html">Off-road
                                cars</a>
                        </h3>
                    </article>
                </div>

                <!-- Category -->
                <div class="swiper-slide">
                    <article class="hover-effect-scale position-relative text-center">
                        <div class="bg-body-tertiary rounded-circle overflow-hidden mx-auto" style="width: 132px">
                            <div class="ratio ratio-1x1 hover-effect-target">
                                <img src="assets/img/home/cars/categories/05.jpg" alt="Image">
                            </div>
                        </div>
                        <h3 class="h6 pt-3 mb-0">
                            <a class="hover-effect-underline stretched-link" href="listings-grid-cars.html">Family
                                cars</a>
                        </h3>
                    </article>
                </div>
            </div>

            <!-- Pagination (Bullets) -->
            <div class="swiper-pagination position-static mt-3"></div>
        </div>
    </section>


    <!-- Platform features -->
    <section class="container pt-2 pt-sm-3 pt-md-4 pt-lg-5 pb-5 my-xxl-3">
        <h2 class="pb-2 pb-sm-3">What sets Finder apart?</h2>

        <!-- Row of cards that turns into carousel on screens < 992px wide (lg breakpoint) -->
        <div class="swiper"
            data-swiper="{
                &quot;slidesPerView&quot;: 1,
                &quot;spaceBetween&quot;: 24,
                &quot;pagination&quot;: {
                    &quot;el&quot;: &quot;.swiper-pagination&quot;,
                    &quot;clickable&quot;: true
                },
                &quot;breakpoints&quot;: {
                    &quot;460&quot;: {
                    &quot;slidesPerView&quot;: 2
                    },
                    &quot;768&quot;: {
                    &quot;slidesPerView&quot;: 3
                    },
                    &quot;992&quot;: {
                    &quot;slidesPerView&quot;: 4
                    }
                }
                }">
            <div class="swiper-wrapper">

                <!-- Card -->
                <div class="swiper-slide h-auto">
                    <div class="card h-100 bg-info-subtle border-0 p-2">
                        <div class="card-body">
                            <i class="fi-copy fs-4 text-info"></i>
                            <h3 class="h5 pt-4 mt-2 mt-sm-3 mb-0">Over 1 million listings</h3>
                        </div>
                    </div>
                </div>

                <!-- Card -->
                <div class="swiper-slide h-auto">
                    <div class="card h-100 bg-info-subtle border-0 p-2">
                        <div class="card-body">
                            <i class="fi-document-search fs-4 text-info"></i>
                            <h3 class="h5 pt-4 mt-2 mt-sm-3 mb-0">Personalized search</h3>
                        </div>
                    </div>
                </div>

                <!-- Card -->
                <div class="swiper-slide h-auto">
                    <div class="card h-100 bg-info-subtle border-0 p-2">
                        <div class="card-body">
                            <i class="fi-car fs-4 text-info"></i>
                            <h3 class="h5 pt-4 mt-2 mt-sm-3 mb-0">Online car appraisal</h3>
                        </div>
                    </div>
                </div>

                <!-- Card -->
                <div class="swiper-slide h-auto">
                    <div class="card h-100 bg-info-subtle border-0 p-2">
                        <div class="card-body">
                            <i class="fi-lightbulb fs-4 text-info"></i>
                            <h3 class="h5 pt-4 mt-2 mt-sm-3 mb-0">Non-stop innovation</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination (Bullets) -->
            <div class="swiper-pagination position-static mt-3"></div>
        </div>
    </section>


    <!-- Latest listings -->
    <section class="container pt-2 pt-sm-3 pt-md-4 pt-lg-5 pb-5 my-xxl-3">
        <div class="d-sm-flex justify-content-between gap-3 pb-3 mb-2 mb-sm-3">
            <h2 class="mb-sm-0">Latest cars</h2>
            <ul class="nav nav-pills flex-sm-nowrap gap-2 text-nowrap">
                <li class="nav-item me-1">
                    <a class="nav-link active" aria-current="page" href="#!">All</a>
                </li>
                <li class="nav-item me-1">
                    <a class="nav-link" href="#!">New cars</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#!">Used cars</a>
                </li>
            </ul>
        </div>

        <!-- Row of listings that turns into carousel on screens < 1200px wide (xl breakpoint) -->
        <div class="swiper"
            data-swiper="{
                &quot;slidesPerView&quot;: 1,
                &quot;spaceBetween&quot;: 24,
                &quot;pagination&quot;: {
                    &quot;el&quot;: &quot;.swiper-pagination&quot;,
                    &quot;clickable&quot;: true
                },
                &quot;breakpoints&quot;: {
                    &quot;550&quot;: {
                    &quot;slidesPerView&quot;: 2
                    },
                    &quot;850&quot;: {
                    &quot;slidesPerView&quot;: 3
                    },
                    &quot;1200&quot;: {
                    &quot;slidesPerView&quot;: 4
                    }
                }
            }">
            <div class="swiper-wrapper">

                <!-- Listing -->
                <div class="swiper-slide h-auto">
                    <article class="card h-100 hover-effect-scale">
                        <div class="card-img-top position-relative overflow-hidden">
                            <div
                                class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-1 pt-1 pt-sm-0 ps-1 ps-sm-0 mt-2 mt-sm-3 ms-2 ms-sm-3">
                                <span class="badge text-bg-info d-inline-flex align-items-center">
                                    Verified
                                    <i class="fi-shield ms-1"></i>
                                </span>
                                <span class="badge text-bg-primary">New</span>
                            </div>
                            <div class="ratio hover-effect-target bg-body-tertiary"
                                style="--fn-aspect-ratio: calc(204 / 306 * 100%)">
                                <img src="assets/img/listings/cars/grid/03.jpg" alt="Image">
                            </div>
                        </div>
                        <div class="card-body pb-3">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <div class="fs-xs text-body-secondary me-3">30/09/2024</div>
                                <div class="d-flex gap-2 position-relative z-2">
                                    <button type="button"
                                        class="btn btn-icon btn-sm btn-outline-secondary animate-pulse rounded-circle"
                                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Wishlist"
                                        aria-label="Add to wishlist">
                                        <i class="fi-heart animate-target fs-sm"></i>
                                    </button>
                                    <button type="button"
                                        class="btn btn-icon btn-sm btn-outline-secondary animate-shake rounded-circle"
                                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Notify"
                                        aria-label="Notify">
                                        <i class="fi-bell animate-target fs-sm"></i>
                                    </button>
                                    <button type="button"
                                        class="btn btn-icon btn-sm btn-outline-secondary animate-rotate rounded-circle"
                                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Compare"
                                        aria-label="Compare">
                                        <i class="fi-repeat animate-target fs-sm"></i>
                                    </button>
                                </div>
                            </div>
                            <h3 class="h6 mb-2">
                                <a class="hover-effect-underline stretched-link me-1"
                                    href="single-entry-cars.html">Ford Truck Lifted</a>
                                <span class="fs-xs fw-normal text-body-secondary">(2024)</span>
                            </h3>
                            <div class="h6 mb-0">$79,000</div>
                        </div>
                        <div class="card-footer bg-transparent border-0 pt-0 pb-4">
                            <div class="border-top pt-3">
                                <div class="row row-cols-2 g-2 fs-sm">
                                    <div class="col d-flex align-items-center gap-2">
                                        <i class="fi-map-pin"></i>
                                        Boston
                                    </div>
                                    <div class="col d-flex align-items-center gap-2">
                                        <i class="fi-tachometer"></i>
                                        0K mi
                                    </div>
                                    <div class="col d-flex align-items-center gap-2">
                                        <i class="fi-gas-pump"></i>
                                        Diesel
                                    </div>
                                    <div class="col d-flex align-items-center gap-2">
                                        <i class="fi-gearbox"></i>
                                        Automatic
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Listing -->
                <div class="swiper-slide h-auto">
                    <article class="card h-100 hover-effect-scale">
                        <div class="card-img-top position-relative overflow-hidden">
                            <div
                                class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-1 pt-1 pt-sm-0 ps-1 ps-sm-0 mt-2 mt-sm-3 ms-2 ms-sm-3">
                                <span class="badge text-bg-warning">Used</span>
                            </div>
                            <div class="ratio hover-effect-target bg-body-tertiary"
                                style="--fn-aspect-ratio: calc(204 / 306 * 100%)">
                                <img src="assets/img/listings/cars/grid/05.jpg" alt="Image">
                            </div>
                        </div>
                        <div class="card-body pb-3">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <div class="fs-xs text-body-secondary me-3">15/07/2024</div>
                                <div class="d-flex gap-2 position-relative z-2">
                                    <button type="button"
                                        class="btn btn-icon btn-sm btn-outline-secondary animate-pulse rounded-circle"
                                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Wishlist"
                                        aria-label="Add to wishlist">
                                        <i class="fi-heart animate-target fs-sm"></i>
                                    </button>
                                    <button type="button"
                                        class="btn btn-icon btn-sm btn-outline-secondary animate-shake rounded-circle"
                                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Notify"
                                        aria-label="Notify">
                                        <i class="fi-bell animate-target fs-sm"></i>
                                    </button>
                                    <button type="button"
                                        class="btn btn-icon btn-sm btn-outline-secondary animate-rotate rounded-circle"
                                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Compare"
                                        aria-label="Compare">
                                        <i class="fi-repeat animate-target fs-sm"></i>
                                    </button>
                                </div>
                            </div>
                            <h3 class="h6 mb-2">
                                <a class="hover-effect-underline stretched-link me-1"
                                    href="single-entry-cars.html">Mercedes-Benz Coupe</a>
                                <span class="fs-xs fw-normal text-body-secondary">(2021)</span>
                            </h3>
                            <div class="h6 mb-0">$115,400</div>
                        </div>
                        <div class="card-footer bg-transparent border-0 pt-0 pb-4">
                            <div class="border-top pt-3">
                                <div class="row row-cols-2 g-2 fs-sm">
                                    <div class="col d-flex align-items-center gap-2">
                                        <i class="fi-map-pin"></i>
                                        New York
                                    </div>
                                    <div class="col d-flex align-items-center gap-2">
                                        <i class="fi-tachometer"></i>
                                        15K mi
                                    </div>
                                    <div class="col d-flex align-items-center gap-2">
                                        <i class="fi-gas-pump"></i>
                                        Gasoline
                                    </div>
                                    <div class="col d-flex align-items-center gap-2">
                                        <i class="fi-gearbox"></i>
                                        Manual
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Listing -->
                <div class="swiper-slide h-auto">
                    <article class="card h-100 hover-effect-scale">
                        <div class="card-img-top position-relative overflow-hidden">
                            <div
                                class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-1 pt-1 pt-sm-0 ps-1 ps-sm-0 mt-2 mt-sm-3 ms-2 ms-sm-3">
                                <span class="badge text-bg-info d-inline-flex align-items-center">
                                    Verified
                                    <i class="fi-shield ms-1"></i>
                                </span>
                                <span class="badge text-bg-warning">Used</span>
                            </div>
                            <div class="ratio hover-effect-target bg-body-tertiary"
                                style="--fn-aspect-ratio: calc(204 / 306 * 100%)">
                                <img src="assets/img/listings/cars/grid/02.jpg" alt="Image">
                            </div>
                        </div>
                        <div class="card-body pb-3">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <div class="fs-xs text-body-secondary me-3">16/08/2024</div>
                                <div class="d-flex gap-2 position-relative z-2">
                                    <button type="button"
                                        class="btn btn-icon btn-sm btn-outline-secondary animate-pulse rounded-circle"
                                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Wishlist"
                                        aria-label="Add to wishlist">
                                        <i class="fi-heart animate-target fs-sm"></i>
                                    </button>
                                    <button type="button"
                                        class="btn btn-icon btn-sm btn-outline-secondary animate-shake rounded-circle"
                                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Notify"
                                        aria-label="Notify">
                                        <i class="fi-bell animate-target fs-sm"></i>
                                    </button>
                                    <button type="button"
                                        class="btn btn-icon btn-sm btn-outline-secondary animate-rotate rounded-circle"
                                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Compare"
                                        aria-label="Compare">
                                        <i class="fi-repeat animate-target fs-sm"></i>
                                    </button>
                                </div>
                            </div>
                            <h3 class="h6 mb-2">
                                <a class="hover-effect-underline stretched-link me-1"
                                    href="single-entry-cars.html">Porsche 911 Turbo S</a>
                                <span class="fs-xs fw-normal text-body-secondary">(2017)</span>
                            </h3>
                            <div class="h6 mb-0">$85,000</div>
                        </div>
                        <div class="card-footer bg-transparent border-0 pt-0 pb-4">
                            <div class="border-top pt-3">
                                <div class="row row-cols-2 g-2 fs-sm">
                                    <div class="col d-flex align-items-center gap-2">
                                        <i class="fi-map-pin"></i>
                                        Chicago
                                    </div>
                                    <div class="col d-flex align-items-center gap-2">
                                        <i class="fi-tachometer"></i>
                                        32K mi
                                    </div>
                                    <div class="col d-flex align-items-center gap-2">
                                        <i class="fi-gas-pump"></i>
                                        Gasoline
                                    </div>
                                    <div class="col d-flex align-items-center gap-2">
                                        <i class="fi-gearbox"></i>
                                        Manual
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Listing -->
                <div class="swiper-slide h-auto">
                    <article class="card h-100 hover-effect-scale">
                        <div class="card-img-top position-relative overflow-hidden">
                            <div
                                class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-1 pt-1 pt-sm-0 ps-1 ps-sm-0 mt-2 mt-sm-3 ms-2 ms-sm-3">
                                <span class="badge text-bg-primary">New</span>
                            </div>
                            <div class="ratio hover-effect-target bg-body-tertiary"
                                style="--fn-aspect-ratio: calc(204 / 306 * 100%)">
                                <img src="assets/img/listings/cars/grid/07.jpg" alt="Image">
                            </div>
                        </div>
                        <div class="card-body pb-3">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <div class="fs-xs text-body-secondary me-3">19/10/2024</div>
                                <div class="d-flex gap-2 position-relative z-2">
                                    <button type="button"
                                        class="btn btn-icon btn-sm btn-outline-secondary animate-pulse rounded-circle"
                                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Wishlist"
                                        aria-label="Add to wishlist">
                                        <i class="fi-heart animate-target fs-sm"></i>
                                    </button>
                                    <button type="button"
                                        class="btn btn-icon btn-sm btn-outline-secondary animate-shake rounded-circle"
                                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Notify"
                                        aria-label="Notify">
                                        <i class="fi-bell animate-target fs-sm"></i>
                                    </button>
                                    <button type="button"
                                        class="btn btn-icon btn-sm btn-outline-secondary animate-rotate rounded-circle"
                                        data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Compare"
                                        aria-label="Compare">
                                        <i class="fi-repeat animate-target fs-sm"></i>
                                    </button>
                                </div>
                            </div>
                            <h3 class="h6 mb-2">
                                <a class="hover-effect-underline stretched-link me-1"
                                    href="single-entry-cars.html">Tesla Model 3</a>
                                <span class="fs-xs fw-normal text-body-secondary">(2024)</span>
                            </h3>
                            <div class="h6 mb-0">$36,200</div>
                        </div>
                        <div class="card-footer bg-transparent border-0 pt-0 pb-4">
                            <div class="border-top pt-3">
                                <div class="row row-cols-2 g-2 fs-sm">
                                    <div class="col d-flex align-items-center gap-2">
                                        <i class="fi-map-pin"></i>
                                        Los Angeles
                                    </div>
                                    <div class="col d-flex align-items-center gap-2">
                                        <i class="fi-tachometer"></i>
                                        0K mi
                                    </div>
                                    <div class="col d-flex align-items-center gap-2">
                                        <i class="fi-gas-pump"></i>
                                        Electric
                                    </div>
                                    <div class="col d-flex align-items-center gap-2">
                                        <i class="fi-gearbox"></i>
                                        Automatic
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

            <!-- Pagination (Bullets) -->
            <div class="swiper-pagination position-static mt-3 mt-lg-4"></div>
        </div>
    </section>

</x-app-layout>
