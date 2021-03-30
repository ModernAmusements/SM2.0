@extends('layouts.app')

@section('content')
    @guest()
    <div class="header bg-primary py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mt-7 mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="display-2 text-silentGreen">{{ __('Screening') }}</h1>

                        <div class="text-center">
                           <a href="/intro">
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
