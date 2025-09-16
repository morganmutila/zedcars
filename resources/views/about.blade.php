<x-app-layout title="About">

    <main class="main">

        <x-page-title title="About">
            We are a company specialized in Information and Communication Technology Infrastructure building and
            Equipment supply.
        </x-page-title>

        <section id="about" class="about section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row align-items-start">

                    <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right" data-aos-delay="200">
                        <div class="content">
                            <h2 class="section-heading fw-bold mb-3">Our Journey</h2>
                            <p class="lead-text mb-4">Professional Outcomes Ltd — simply PROFOUT — was founded in 2014
                                in the vibrant Northmead suburb of Lusaka, Zambia.
                            </p>
                            <p class="description-text">We began as an electrical contracting company, serving
                                financial institutions by wiring and installing equipment in bank branches. As the
                                demand for ICT systems grew across the country, we evolved into the IT sector,
                                delivering innovative solutions and bridging critical gaps in the industry.</p>


                            <p class="description-text">Over the years, our commitment to excellence has earned us
                                the trust of our clients, enabling steady growth and long-term sustainability. Today,
                                our focus remains the same — to stay relevant in the fast-paced 21st century by
                                proactively adopting the latest technologies, ensuring we consistently meet and exceed
                                customer expectations.</p>

                        </div>
                    </div>

                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="200">
                        <div class="image-section">
                            <div class="main-image">
                                <img src="{{ asset('assets/img/about.jpg') }}" alt="Construction project showcase"
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>

        @include('partials.our_values')

        <section id="clients" class="clients section">

            <div class="container my-md-5" data-aos="fade-up">
                <h2 class="section-heading fw-bold">A few of the Businesses who trust Profout</h2>
            </div>

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row">
                    <div class="clients-slider d-flex flex-wrap gap-3 gap-md-5 align-items-center px-2 p-md-0">
                        @foreach ($clients as $client)
                            <div class="col-3 col-md-4 col-lg-1">
                                <img src="{{ asset('storage/' . $client->logo) }}" class="img-fluid"
                                    alt="{{ $client->name }}">
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>

        </section>

        <!-- Certifications Section -->
        <section id="certifications" class="certifications section light-background">

            <div class="container section-title pb-0" data-aos="fade-up">
                <h2>Certified and Trusted</h2>
                <p>We are fully certified and trusted in our industry.</p>
            </div>

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-5 mt-4">

                    @foreach ($certifications as $certification)
                        <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                            <div class="certification-item">
                                <div class="certification-badge">
                                    <img src="{{ asset('storage/' . $certification->logo) }}"
                                        alt="{{ $certification->name }}" class="img-fluid">
                                </div>
                                <h4>{{ $certification->name }}</h4>
                                <p>{{ $certification->description }}</p>
                            </div>
                        </div>
                    @endforeach

                </div>

                <div class="row mt-5" data-aos="fade-up" data-aos-delay="500">
                    <div class="col-12">
                        <div class="certification-stats">
                            <div class="row text-center">
                                <div class="col-lg-3 col-md-6 mb-4">
                                    <div class="stat-item">
                                        <h3>11+</h3>
                                        <p>Years of Experience</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-4">
                                    <div class="stat-item">
                                        <h3>100+</h3>
                                        <p>Completed Projects</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-4">
                                    <div class="stat-item">
                                        <h3>12+</h3>
                                        <p>Industry Certifications</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-4">
                                    <div class="stat-item">
                                        <h3>98%</h3>
                                        <p>Client Satisfaction</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Certifications Section -->

    </main>

</x-app-layout>
