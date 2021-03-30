@extends('layouts.app')

@section('content')

@include('layouts.headers.cardsAdmin')

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 mb-5 mb-xl-0">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-transparent pb-1">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-uppercase text-dark ls-1 mb-1">Create New Survey</h6>
                            <h1 class="text-silentGreen mb-0">Add Survey</h1>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if ($errors->any())

                    <div class="alert alert-danger" role="alert">
                        <strong>Warning:</strong><em> Please check out your input.</em>
                    </div>
                    @endif
                    <form method="POST" action="create" id="boolean">
                        <div class="form-group">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="input-group input-group-alternative mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Survey Title</span>
                                </div>
                                <input
                                    class="form-control form-control-alternative {{ $errors->has('title') ? 'border-danger' : '' }}"
                                    name="title" id="title" type="text">

                                <div class="input-group-prepend">
                                    <span class="input-group-text text-danger">{!! $errors->first('title') !!}</span>
                                </div>
                            </div>
                            <div class="input-group input-group-alternative mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Description</span>
                                </div>
                                <textarea
                                    class="form-control form-control-alternative {{ $errors->has('description') ? 'border-danger' : '' }}"
                                    rows="3" name="description" id="description"></textarea>
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-danger">{!! $errors->first('description') !!}</span>
                                </div>
                            </div>
                            <div class="input-field">
                                <button class="btn btn-primary btn-lg btn-block">Submit</button>
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
