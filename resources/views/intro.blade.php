@extends('layouts.app')

@section('content')
@guest()
    <div class="header bg-primary py-7 py-lg-8">
        <div class="container">
            <div class="header-body  text-center mt-7 mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="display-2 text-silentGreen">{{ __('What is Silent Moon?') }}</h1>
                        <p class="lead mb-0 text-white">{{ __('You will get the chance to explore free meditations, gain different attitudes & perspectives, while contributing to the science, respectively while we are studying the effects it has on you.') }}</p>
                        <div class="text-center">
                            <a href="{{ route('register') }}"><button class="btn btn-lg btn-neutral mt-4">{{ __('Curious?') }}</button></a>
                         </div>
                        <img src="{{ asset('argon') }}/img/silent-moon-get-started.png" class="img-fluid" alt="Responsive image">
                        <p class="lead mb-0 text-white">{{ __('To participate we simply ask you to meditate & complete two surveys at the beginning & the end plus short scales on your well-being & attention inbetween.') }}</p>
                        <div class="text-center">
                           <a href="{{ route('register') }}"><button class="btn btn-lg btn-neutral mt-4">{{ __('Next') }}<i class="fas fa-arrow-right"></i></button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator separator-bottom zindex-100">
        </div>
    </div>

    <div class="container mt--10 pb-5"></div>
    @endguest
@endsection

