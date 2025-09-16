<x-app-layout title="Contact Us">


    <main class="main">

        <x-page-title title="Contact Us">
            To contact us, please use the form or give us a call, send an email to contact Profout with the contact
            details that are listed below.
        </x-page-title>

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-main-wrapper">
                    <div class="map-wrapper">
                        {!! $settingsGlobal->map_location !!}
                    </div>

                    <div class="contact-content">
                        <div class="contact-cards-container" data-aos="fade-up" data-aos-delay="300">
                            <div class="contact-card">
                                <div class="icon-box">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                                <div class="contact-text">
                                    <h4>Location</h4>
                                    <p>{{ $settingsGlobal->address }}</p>
                                </div>
                            </div>

                            <div class="contact-card">
                                <div class="icon-box">
                                    <i class="bi bi-envelope"></i>
                                </div>
                                <div class="contact-text">
                                    <h4>Email</h4>
                                    <p>{{ $settingsGlobal->email }}</p>
                                </div>
                            </div>

                            <div class="contact-card">
                                <div class="icon-box">
                                    <i class="bi bi-telephone"></i>
                                </div>
                                <div class="contact-text">
                                    <h4>Call</h4>
                                    <p>{{ $settingsGlobal->phone }}</p>
                                </div>
                            </div>

                            <div class="contact-card">
                                <div class="icon-box">
                                    <i class="bi bi-clock"></i>
                                </div>
                                <div class="contact-text">
                                    <h4>Open Hours</h4>
                                    <p>Monday - Friday: 8HRS - 17HRS<br><span class="fs-6">Excluding public
                                            Holidays</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="contact-form-container d-flex flex-column" data-aos="fade-up" data-aos-delay="400">
                            <h3>Leave us a message</h3>
                            <p>Send an email to contact Profout. Our dedicated team will reply to the email on any
                                enquiries on the products and services.</p>

                            <livewire:client-contact-form />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="clients" class="clients section">

            <div class="container my-md-5" data-aos="fade-up">
                <h2 class="section-heading fw-bold">Our Client Portfolio</h2>
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

    </main>

</x-app-layout>
