<x-app-layout>

    <x-slot:title>
        Terms - {{ config('app.name') }}
    </x-slot:title>

    <main class="content-wrapper">
        <div class="container pt-4 pt-sm-5 pb-5 mt-2 mt-sm-0 mt-lg-2 mb-2 mb-md-3 mb-lg-4 mb-xl-5">
            <div class="row justify-content-center">
                <div class="col-lg-11 col-xl-10 col-xxl-9">
                    <h1 class="h2 pb-2 pb-sm-3 pb-lg-4">Terms and Conditions</h1>
                    <hr class="mt-0">
                    <div class="h6 pt-2 pt-lg-3"><span class="text-body-secondary fw-medium">Last
                            updated:&nbsp;</span>{{ date('F j, Y') }}</div>
                    <p>Welcome to ZedCars! These terms and conditions outline the rules and regulations for the use of
                        ZedCars's Website, located at <span class="fw-semibold">zedcars.com</span>. By accessing
                        this
                        website, we assume you accept these terms and conditions. Do not continue to use ZedCars if you
                        do not agree to take all of the terms and conditions stated on this page.</p>

                    <h2 class="h4 pt-3 pt-lg-4">1. Definitions</h2>
                    <ul>
                        <li><span class="fw-semibold text-body-emphasis">"ZedCars"</span> refers to our real estate
                            listings website.</li>
                        <li><span class="fw-semibold text-body-emphasis">"User"</span> refers to anyone using our
                            website, including sellers and buyers.</li>
                        <li><span class="fw-semibold text-body-emphasis">"Listing"</span> refers to any car listed
                            for sale, purchase on ZedCars.</li>
                    </ul>

                    <h2 class="h4 pt-3 pt-lg-4">2. Acceptance of Terms</h2>
                    <p>By using ZedCars, you agree to comply with and be legally bound by the terms and conditions set
                        forth below, whether or not you become a registered user of the services. These terms govern
                        your access to and use of the website and services, and constitute a binding legal agreement
                        between you and ZedCars.</p>

                    <h2 class="h4 pt-3 pt-lg-4">3. Use of the Website</h2>
                    <h3 class="h6 pt-1">a. Eligibility</h3>
                    <p>To use ZedCars, you must be at least 18 years old and capable of forming a binding contract with
                        ZedCars and not be barred from using the services under applicable law.</p>
                    <h3 class="h6 pt-2">b. User Accounts</h3>
                    <ul>
                        <li>Users may be required to create an account to access certain features of the website.</li>
                        <li>You are responsible for maintaining the confidentiality of your account information and for
                            all activities that occur under your account.</li>
                    </ul>

                    <h2 class="h4 pt-3 pt-lg-4">4. Listings and Transactions</h2>
                    <h3 class="h6 pt-1">a. Listings</h3>
                    <ul>
                        <li>Users can create listings to sell, buy, or rent properties.</li>
                        <li>Listings must be accurate, up-to-date, and not misleading.</li>
                    </ul>
                    <h3 class="h6 pt-2">b. Transactions</h3>
                    <ul>
                        <li>ZedCars is not a party to any transaction between buyers, sellers, and renters. We do not
                            guarantee the quality, safety, or legality of the properties listed.</li>
                    </ul>

                    <h2 class="h4 pt-3 pt-lg-4">5. User Obligations</h2>
                    <ul>
                        <li>Users must comply with all applicable laws and regulations.</li>
                        <li>Users must not use ZedCars to engage in any illegal or fraudulent activities.</li>
                        <li>Users must not post any content that is offensive, defamatory, or infringes on any third
                            party's rights.</li>
                    </ul>

                    <h2 class="h4 pt-3 pt-lg-4">6. Fees and Payments</h2>
                    <ul>
                        <li>Certain services on ZedCars may require payment of fees. All fees are non-refundable unless
                            otherwise stated.</li>
                        <li>Payment terms are outlined at the point of transaction.</li>
                    </ul>

                    <h2 class="h4 pt-3 pt-lg-4">7. Intellectual Property</h2>
                    <ul>
                        <li>All content on ZedCars, including text, graphics, logos, and software, is the property of
                            ZedCars or its content suppliers and is protected by copyright laws.</li>
                        <li>Users may not reproduce, distribute, or create derivative works from any content on ZedCars
                            without our explicit permission.</li>
                    </ul>

                    <h2 class="h4 pt-3 pt-lg-4">8. Privacy Policy</h2>
                    <p>Your use of ZedCars is also governed by our Privacy Policy, which is incorporated by reference
                        into these terms. Please review our Privacy Policy to understand our practices.</p>

                    <h2 class="h4 pt-3 pt-lg-4">9. Limitation of Liability</h2>
                    <ul>
                        <li>ZedCars is not liable for any direct, indirect, incidental, special, or consequential
                            damages
                            arising out of or in connection with your use of the website.</li>
                        <li>ZedCars does not guarantee the accuracy, completeness, or usefulness of any information on
                            the website.</li>
                    </ul>

                    <h2 class="h4 pt-3 pt-lg-4">10. Indemnification</h2>
                    <p>You agree to indemnify and hold ZedCars and its affiliates, officers, agents, and employees
                        harmless from any claim or demand, including reasonable attorney's fees, made by any third party
                        due to or arising out of your use of the website, your violation of these terms, or your
                        violation of any rights of another.</p>

                    <h2 class="h4 pt-3 pt-lg-4">11. Modifications to the Service</h2>
                    <p>ZedCars reserves the right to modify or discontinue, temporarily or permanently, the service with
                        or without notice at any time.</p>

                    <h2 class="h4 pt-3 pt-lg-4">12. Governing Law</h2>
                    <p>These terms and conditions are governed by and construed in accordance with the laws of [Your
                        Country/State], and you irrevocably submit to the exclusive jurisdiction of the courts in that
                        location.</p>

                    <h2 class="h4 pt-3 pt-lg-4">13. Contact information</h2>
                    <p>If you have any questions, or comments about these Terms please contact ZedCars at:</p>
                    <ul class="list-unstyled pb-1">
                        <li class="nav pt-1">
                            <a class="nav-link align-items-start fs-base p-0" href="tel:+15053753082">
                                <i class="fi-phone fs-xl mt-1 me-2"></i>
                                +260976249140
                            </a>
                        </li>
                        <li class="nav pt-1">
                            <a class="nav-link align-items-start fs-base p-0" href="mailto:contact@zedcars.com">
                                <i class="fi-mail fs-xl mt-1 me-2"></i>
                                contact@zedcars.com
                            </a>
                        </li>
                        <li class="nav pt-1">
                            <a class="nav-link align-items-start fs-base p-0" href="#!">
                                <i class="fi-map-pin fs-xl mt-1 me-2"></i>
                                Kamwala South, Luskata, Zambia
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
