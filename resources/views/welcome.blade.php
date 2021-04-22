{{-- @extends('layouts.app', ['class' => 'bg-default']) --}}
@extends('layouts.app')
@section('content')
@guest()
    <div class="header bg-primary py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mt-7 mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="display-2 text-silentGreen">{{ __('Willkommen bei Silent Moon') }}</h1>
                        <p class="lead text-white">{{ __('kostenlose Meditationen, andere Perspektiven einnehmen,
                        das eigene Selbst besser kennenlernen & gleichzeitig einen Beitrag zur Wissenschaft leisten') }}
                        </p>
                        <img src="{{ asset('argon') }}/img/silent-moon-hero.png" class="img-fluid" alt="Responsive image">
                        <div class="text-center">
                           <a href="/preScreening">
                            <button class="btn btn-lg btn-neutral mt-4">
                                {{ __('WAS IST SILENT MOON?') }}<i class="fas fa-arrow-right"></i>
                            </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator separator-bottom  zindex-100">

        </div>
    </div>

    <div class="container mt--10 pb-5"></div>
    @endguest
    @auth()
    <div class="header bg-primary py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mt-7 mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <span class="badge badge-success">New</span>
                        <h1 class="display-2 text-silentGreen">{{ __('Welcome to SilentMoon') }}</br>{{ auth()->user()->name }}</h1>
                        <p class="lead text-white">{{ __('explore free meditations, gain different attitudes and perspectives, while contributing to the science') }}</p>
                        <img src="{{ asset('argon') }}/img/silent-moon-hero.png" class="img-fluid" alt="Responsive image">
                        <div class="text-center">
                           <a href="{{ route('home') }}"><button class="btn btn-lg btn-neutral mt-4">{{ __('Dashboard') }}</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <path class="fill-secondary" d="M0 0L106.667 3.7037C213.333 7.40741 426.667 14.8148 640 18.5185C853.333 22.2222 1066.67 22.2222 1280 35.1852C1493.33 48.1481 1706.67 74.0741 1920 79.6296C2133.33 85.1852 2346.67 70.3704 2453.33 62.963L2560 55.5556V100H2453.33C2346.67 100 2133.33 100 1920 100C1706.67 100 1493.33 100 1280 100C1066.67 100 853.333 100 640 100C426.667 100 213.333 100 106.667 100H0V0Z">
            </svg>
        </div>
    </div>

    <div class="container mt-0 pb-5"></div>
    @endauth
@endsection

