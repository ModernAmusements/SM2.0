@extends('layouts.app')

@section('content')
    @guest()
    <div class="header bg-primary py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mt-7 mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <p class="lead text-white">Bei erfolgreichen Durchlauf des Screenings „Vielen Dank für Ihre Zeit. Glückwunsch, Sie
                            können an der Studie teilnehmen! Wenn Sie immer noch Interesse haben, geben Sie bitte
                            Ihre Mail-Adresse in das Feld. In Kürze erhalten Sie dann eine Bestätigungsmail, in welcher
                            Sie detailliert über die Studie aufgeklärt werden. </br> Wir werden Ihnen Studieninformation und
                            Informationen zum Datenschutz und Ihrem Einverständnis an diese Mail senden. Ihre Mail-
                            Adresse wird zu keinem Zeitpunkt mit Ihren hier oder später angegebenen Antworten in
                            Verbindung gebracht oder an Dritte weitergereicht. Die Angabe der Mail-Adresse ist
                            freiwillig, aber notwendig um an der Studie teilzunehmen und weitere Informationen zu
                            erhalten.“
                        </p>
                        <img src="{{ asset('argon') }}/img/silent-moon-hero.png" class="w-75 img-fluid" alt="Responsive image">
                        <div class="text-center">
                           <a href="/screening">
                            <button class="btn btn-lg btn-neutral mt-4">
                                {{ __('HIER GEHTS ZUM SCREENING') }}<i class="fas fa-arrow-right"></i>
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
@endsection
