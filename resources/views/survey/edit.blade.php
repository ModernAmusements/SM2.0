@extends('layouts.appAdmin')

@section('content')
@include('layouts.headers.cardsAdmin')
<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 mb-5 mb-xl-0">
            <div class="card  shadow">
                <div class="card-header bg-transparent pb-1">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-uppercase text-dark ls-1 mb-1">Edit current Survey</h6>
                            <h1 class="text-silentGreen mb-0">Edit Survey Title</h1>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if ($errors->any())

                    <div class="alert alert-danger" role="alert">
                        <strong>Warning:</strong><em> Please check out your input.</em>
                    </div>
                    @endif
                    <form method="POST" action="/survey/{{ $survey->id }}/update">
                        {{ method_field('PATCH') }}
                        <div class="form-group">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="input-group input-group-alternative mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Your Title:</span>
                                </div>
                                <input
                                    class="form-control form-control-alternative {{ $errors->has('title') ? 'border-danger' : '' }}"
                                    name="title" id="title" type="text" value="{{ $survey->title }}">
                                <small class="form-text text-danger">{!! $errors->first('title') !!}</small>

                            </div>
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Your Description:</span>
                                </div>
                                <textarea
                                    class="form-control form-control-alternative {{ $errors->has('description') ? 'border-danger' : '' }}"
                                    rows="3" name="description" id="description">{{ $survey->description }}</textarea>
                                <small class="form-text text-danger">{!! $errors->first('description') !!}</small>

                            </div>
                            <div class="input-field">
                                <button class="btn btn-primary btn-lg btn-block">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>


    @include('layouts.footers.auth')
</div>

@endsection
@push('js')
    <script src="{{ asset('argon') }}/js/init.js"></script>
    <script src="{{ asset('argon') }}/js/materialize.js"></script>

@endpush
