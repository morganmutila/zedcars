<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<section class="position-relative bg-info overflow-hidden py-5">
    <div class="container position-relative z-2 pb-2 py-sm-3 py-md-4 py-lg-5 my-lg-3 my-xl-4 my-xxl-5">
        <div class="row align-items-center pt-lg-2 pb-lg-3 pb-xl-4 pb-xxl-5">

            <!-- Heading -->
            <div class="col-lg-5 order-lg-2 text-center text-lg-start pb-2 pb-sm-3 pb-md-0 mb-4 mb-md-5 mb-lg-0">
                <h1 class="display-4 text-white">Easy way to find the right car</h1>
            </div>


            <!-- Search form -->
            <div class="col-lg-7 order-lg-1">
                <div class="bg-white rounded p-4 mb-4 me-lg-4 me-xxl-0" style="max-width: 816px; --fn-bg-opacity: .08">
                    <form class="p-sm-2" data-bs-theme="light">
                        <div class="d-flex justify-content-center justify-content-md-start gap-2 gap-sm-3 mb-4"
                            data-bs-theme="dark">
                            <input type="radio" class="btn-check" name="car-search" id="all-cars" checked="">
                            <label for="all-cars" class="btn btn-outline-secondary rounded-pill"
                                style="--fn-btn-border-color: rgba(255,255,255, .15)">All</label>
                            <input type="radio" class="btn-check" name="car-search" id="new-cars">
                            <label for="new-cars" class="btn btn-outline-secondary rounded-pill"
                                style="--fn-btn-border-color: rgba(255,255,255, .15)">New cars</label>
                            <input type="radio" class="btn-check" name="car-search" id="used-cars">
                            <label for="used-cars" class="btn btn-outline-secondary rounded-pill"
                                style="--fn-btn-border-color: rgba(255,255,255, .15)">Used cars</label>
                        </div>
                        <div class="row row-cols-1 row-cols-md-2 g-3">
                            <div class="col d-flex flex-column gap-3">
                                <select class="form-select" data-select="{&quot;searchEnabled&quot;: true}"
                                    aria-label="Car make select" data-bs-theme="light">
                                    <option value="">Make</option>
                                    <option value="Toyota">Toyota</option>
                                    <option value="Mercedes-Benz">Mercedes-Benz</option>
                                    <option value="BMW">BMW</option>
                                    <option value="Honda">Honda</option>
                                    <option value="Ford">Ford</option>
                                    <option value="Chevrolet">Chevrolet</option>
                                    <option value="Audi">Audi</option>
                                    <option value="Tesla">Tesla</option>
                                    <option value="Tesla">Mazda</option>
                                    <option value="Nissan">Nissan</option>
                                    <option value="Volkswagen">Volkswagen</option>
                                </select>
                                <select class="form-select" data-select="{&quot;searchEnabled&quot;: true}"
                                    aria-label="Car model select" data-bs-theme="light">
                                    <option value="">Model</option>
                                    <option value="A-Class">A-Class</option>
                                    <option value="C-Class">C-Class</option>
                                    <option value="E-Class">E-Class</option>
                                    <option value="S-Class">S-Class</option>
                                    <option value="A205">A205</option>
                                    <option value="GLA">GLA</option>
                                    <option value="GLC">GLC</option>
                                    <option value="GLE">GLE</option>
                                    <option value="GLS">GLS</option>
                                    <option value="AMG GT">AMG GT</option>
                                </select>
                                <select class="form-select" data-select="" aria-label="Car body type select"
                                    data-bs-theme="light">
                                    <option value="">Body type</option>
                                    <option value="Sedan">Sedan</option>
                                    <option value="Convertible">Convertible</option>
                                    <option value="SUV">SUV</option>
                                    <option value="Coupe">Coupe</option>
                                    <option value="Pickup">Pickup</option>
                                </select>
                            </div>
                            <div class="col d-flex flex-column gap-3">
                                <select class="form-select" data-select="{&quot;searchEnabled&quot;: true}"
                                    aria-label="Car location select" data-bs-theme="light">
                                    <option value="">Location</option>
                                    <option value="New York">New York</option>
                                    <option value="Los Angeles">Los Angeles</option>
                                    <option value="Chicago">Chicago</option>
                                    <option value="Houston">Houston</option>
                                    <option value="Phoenix">Phoenix</option>
                                    <option value="Philadelphia">Philadelphia</option>
                                    <option value="San Antonio">San Antonio</option>
                                    <option value="San Diego">San Diego</option>
                                    <option value="Dallas">Dallas</option>
                                    <option value="San Jose">San Jose</option>
                                </select>
                                <div class="input-group">
                                    <div class="w-50">
                                        <select class="form-select rounded-end-0"
                                            data-select="{
                        &quot;classNames&quot;: {
                            &quot;containerInner&quot;: [&quot;form-select&quot;, &quot;rounded-end-0&quot;]
                        }
                        }"
                                            aria-label="Car year from select" data-bs-theme="light">
                                            <option value="">Year from</option>
                                            <option value="2025">2025</option>
                                            <option value="2024">2024</option>
                                            <option value="2023">2023</option>
                                            <option value="2023">2023</option>
                                            <option value="2021">2021</option>
                                            <option value="2020">2020</option>
                                            <option value="2019">2019</option>
                                            <option value="2018">2018</option>
                                            <option value="2017">2017</option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                        </select>
                                    </div>
                                    <div class="w-50">
                                        <select class="form-select rounded-start-0"
                                            data-select="{
                        &quot;classNames&quot;: {
                            &quot;containerInner&quot;: [&quot;form-select&quot;, &quot;rounded-start-0&quot;]
                        }
                        }"
                                            aria-label="Car year to select" data-bs-theme="light">
                                            <option value="">Year to</option>
                                            <option value="2025">2025</option>
                                            <option value="2024">2024</option>
                                            <option value="2023">2023</option>
                                            <option value="2023">2023</option>
                                            <option value="2021">2021</option>
                                            <option value="2020">2020</option>
                                            <option value="2019">2019</option>
                                            <option value="2018">2018</option>
                                            <option value="2017">2017</option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="input-group flex-nowrap" data-bs-theme="light">
                                    <div class="position-relative w-100">
                                        <i
                                            class="fi-dollar-sign position-absolute top-50 start-0 translate-middle-y text-body ms-3"></i>
                                        <input type="text" class="form-control form-icon-start rounded-end-0"
                                            placeholder="Price from" data-input-format="{&quot;numeral&quot;: true}"
                                            data-bs-theme="light">
                                    </div>
                                    <div class="position-relative w-100">
                                        <i
                                            class="fi-dollar-sign position-absolute top-50 start-0 translate-middle-y text-body ms-3"></i>
                                        <input type="text" class="form-control form-icon-start rounded-start-0"
                                            placeholder="Price to" data-input-format="{&quot;numeral&quot;: true}"
                                            data-bs-theme="light">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="d-flex flex-column gap-2 flex-lg-row justify-content-center justify-content-md-start pt-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fi-search fs-base me-2 ms-n1"></i>
                                Search
                            </button>
                            <a class="btn btn-white-outline btn-outline-light position-relative" href="#!">
                                <span class="stretched-link">Advanced search</span>
                                <i class="fi-chevron-right fs-base ms-1 me-n1"></i>
                            </a>
                        </div>
                    </form>
                </div>
                <div data-bs-theme="dark">
                    <p class="text-body text-center text-md-start mb-0">{{ config('app.name') }} is a <span
                            class="fw-semibold">leading digital marketplace</span> for the automotive industry.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
