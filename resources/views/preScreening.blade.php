@extends('layouts.app')

@section('content')
    @guest()
    <div class="header bg-primary py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mt-7 mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="display-2 text-silentGreen">Worum geht's hier eigentlich?</h1>
                        <img src="{{ asset('argon') }}/img/huzb-screening-img.png" class="w-75 img-fluid" alt="Responsive image">
                        <p class="lead text-white">SilentMoon hat eine Mission: Die Gesundheit auf
                            dieser Welt zu verbessern und das Glück zu steigern. Mit Millionen
                            von Nutzern in über 190 Ländern sind wir bereits auf dem Weg dies
                            zu erreichen. Neben unserem Hauptsitz in Santa Monica (Kalifornien),
                            haben wir noch Büros in San Francisco und London.
                        </p>
                        <div class="text-center">
                           <a href="/startScreening">
                            <button class="btn btn-lg btn-neutral mt-4">
                                {{ __('HIER GEHTS ZUM SCREENING') }}<i class="fas fa-arrow-right"></i>
                            </button>
                            </a>
                        </div>
                        <p class="small mt-7 text-white">*Wir werden Ihnen Studieninformation und
                            Informationen zum Datenschutz und Ihrem Einverständnis an diese Mail senden. Ihre Mail-
                            Adresse wird zu keinem Zeitpunkt mit Ihren hier oder später angegebenen Antworten in
                            Verbindung gebracht oder an Dritte weitergereicht. Die Angabe der Mail-Adresse ist
                            freiwillig, aber notwendig um an der Studie teilzunehmen und weitere Informationen zu
                            erhalten. Mehr Information dazu finden sie Hier.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator separator-bottom  zindex-100">

        </div>
    </div>

    <div class="container mt--10 pb-5"></div>
    @endguest
@endsection
