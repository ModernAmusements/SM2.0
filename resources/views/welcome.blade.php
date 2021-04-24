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
                        <h1 class="display-2 text-silentGreen">{{ __('Welcome to SilentMoon') }}</br>Hallo, {{ auth()->user()->name }}</h1>
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
    <div class="modal fade show" id="silentMoonModalCookies" tabindex="-1" role="dialog" aria-labelledby="silentMoonModalCookies" aria-modal="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="modal-title-default">Wir schneiden hier alles auf dich zu</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Wir verwenden Analysemethoden, um zu messen, wie häufig unsere Seite besucht und wie sie genutzt wird. Wir verwenden Trackingtechnologien zu Marketingzwecken und setzen hierzu auch Drittanbieter ein, die ggf. geräteübergreifend Cookies, Fingerprints, Tracking-Pixel und IP-Adressen nutzen. Wir betten Drittinhalte von anderen Anbietern ein. Wir setzen in diesem Rahmen auch Dienstleister in Ländern außerhalb des EWR ein, in denen Daten nicht in der gleichen Weise geschützt sind wie im EWR, was u.a. erweiterte Zugriffsrechte von Behörden und geringere Betroffenenrechte bedeuten kann. Mit Ihrer Einstellung willigen Sie in die oben beschriebenen Vorgänge ein. Sie können Ihre Einwilligung mit Wirkung für die Zukunft widerrufen. Mehr Informationen finden Sie in unserer Datenschutzerklärung. Sie können auch alle nicht erforderlichen Cookies ablehnen, wenn Sie mit den beschriebenen Datenverarbeitungen nicht einverstanden sind. Sie können auch alle nicht erforderlichen Cookies ablehnen, wenn Sie mit den beschriebenen Datenverarbeitungen nicht einverstanden sind.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Alle akzeptieren</button>
              <button type="button" class="btn btn-link ml-auto" data-dismiss="modal">Datenschutzerklärung</button>
            </div>
          </div>
        </div>
      </div>
      @push('js')
<script>
    $(window).on('load', function() {
    $('#silentMoonModalCookies').modal('show');
});

</script>
<script src="{{ asset('argon') }}/js/init.js"></script>
<script src="{{ asset('argon') }}/js/materialize.js"></script>
@endpush

@endsection

