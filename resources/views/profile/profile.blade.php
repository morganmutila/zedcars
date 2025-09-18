<x-auth-layout>
    <x-slot:title>
        Profile - {{ config('app.name') }}
    </x-slot:title>

    <!-- Account profile content -->

    <h1 class="h2 pb-2 pb-lg-3">Profile</h1>

    <!-- Profile completeness info card -->

    @if ($progress['percentage'] !== 100)
        <div class="card bg-warning-subtle border-0 mb-2">
            <div class="card-body d-flex align-items-center">
                <div class="circular-progress text-warning flex-shrink-0" role="progressbar"
                    style="--fn-progress: {{ $progress['percentage'] }}" aria-label="Warning progress"
                    aria-valuenow="{{ $progress['percentage'] }}" aria-valuemin="0" aria-valuemax="100">

                    <svg class="progress-circle">
                        <circle class="progress-background d-none-dark" r="0" style="stroke: #fff"></circle>
                        <circle class="progress-background d-none d-block-dark" r="0"
                            style="stroke: rgba(255,255,255, .1)"></circle>
                        <circle class="progress-bar" r="0"></circle>
                    </svg>

                    <h5 class="position-absolute top-50 start-50 translate-middle text-center mb-0">
                        {{ $progress['percentage'] }}%
                    </h5>
                </div>

                <div class="ps-3 ps-sm-4">
                    @if ($progress['percentage'] !== 100)
                        <h3 class="h6 pb-1 mb-2">Complete your profile</h3>
                    @else
                        <h3 class="h6 pb-1 mb-2">Profile Completed</h3>
                    @endif
                    <ul class="list-unstyled flex-row flex-wrap fs-sm mb-0">
                        @foreach ($progress['missing'] as $task)
                            <li class="d-flex me-3">
                                <i class="fi-plus fs-base me-2" style="margin-top: .1875rem"></i>
                                {{ $task }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif


    <!-- Profile picture (Avatar) -->
    <div class="d-flex align-items-start align-items-sm-center mb-2">
        <div class="ratio ratio-1x1 hover-effect-opacity bg-body-tertiary border rounded-circle overflow-hidden"
            style="width: 124px">
            <img src="{{ auth()->user()->profile->avatar }}" alt="Avatar">
            <div
                class="hover-effect-target position-absolute top-0 start-0 d-flex align-items-center justify-content-center w-100 h-100 opacity-0">
                <button type="button" class="btn btn-icon btn-sm btn-light position-relative z-2" aria-label="Remove">
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


</x-auth-layout>
