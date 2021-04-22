@extends('layouts.app')

@section('content')
@guest()
    <div class="header bg-primary py-7 py-lg-8">
        <div class="container">
            <div class="header-body  text-center mt-7 mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="display-2 text-silentGreen">{{ __('Was ist Silent Moon?') }}</h1>
                        <p class="lead mb-0 text-white">{{ __('Sie erhalten die Möglichkeit, freie Meditationen zu erforschen, andere Einstellungen & Perspektiven zu gewinnen, während Sie einen Beitrag zur Wissenschaft leisten, bzw. während wir die Auswirkungen auf Sie untersuchen.') }}</p>
                        <div class="text-center">
                            <a href="{{ route('register') }}"><button class="btn btn-lg btn-neutral mt-4">{{ __('Neugierig?') }}</button></a>
                         </div>
                        <img src="{{ asset('argon') }}/img/silent-moon-get-started.png" class="img-fluid" alt="Responsive image">
                        <p class="lead mb-0 text-white">{{ __('Um teilzunehmen, bitten wir Sie einfach zu meditieren und zwei Umfragen zu Beginn und am Ende auszufüllen, sowie kurze Skalen zu Ihrem Wohlbefinden und Ihrer Aufmerksamkeit dazwischen.') }}</p>
                        <div class="text-center">
                           <a href="{{ route('register') }}"><button class="btn btn-lg btn-neutral mt-4">{{ __('Weiter') }}<i class="fas fa-arrow-right"></i></button></a>
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

