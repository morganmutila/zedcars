<x-simple-layout>

    <x-slot name="title">Page Expired</x-slot>

    <!-- Page content -->
    <main
        class="content-wrapper container position-relative d-flex flex-column justify-content-center z-1 pt-4 pb-2 py-lg-5 mt-3 mt-sm-4 mt-lg-0 mt-xl-2">
        <div class="row justify-content-center">
            <div class="col-sm-11 col-md-9 col-lg-7 col-xl-6">
                <div class="ratio mx-auto" style="max-width: 196px; --fn-aspect-ratio: calc(126 / 196 * 100%)">
                    <img src="{{ asset('assets/img/errors/cones.png') }}" alt="Server Error">
                </div>
                <h1 class="h2 text-center pt-4 pt-md-5 mt-1 mt-sm-2 mt-md-0 mb-4">Page Expired</h1>
                <p class="lead text-center fs-4">This page has expired</p>

            </div>
        </div>
    </main>

</x-simple-layout>
