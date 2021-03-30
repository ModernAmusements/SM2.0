@extends('layouts.appAdmin')

@section('content')

@include('layouts.headers.cards')

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 mb-5 mb-xl-0">
            <div class="card  shadow">
                <div class="card-header bg-transparent pb-1">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-uppercase text-dark ls-1 mb-1">Edit</h6>
                            <h1 class="text-silentGreen mb-0">Edit Question</h1>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if ($errors->any())

                    <div class="alert alert-danger" role="alert">
                        <strong>Warning:</strong><em> Please check out your input.</em>
                    </div>
                    @endif
                    <form method="POST" action="/question/{{ $question->id }}/update">
                        {{ method_field('PATCH') }}
                        <div class="form-group">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Question Title:</span>
                                </div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <input value="{{ $question->title }}"
                                    class="form-control form-control-alternative {{ $errors->has('title') ? 'border-danger' : '' }}"
                                    name="title" id="title" type="text">
                                <small class="form-text text-danger">{!! $errors->first('title') !!}</small>

                            </div>
                            <div class="input-group">
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
