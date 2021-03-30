@extends('layouts.appAdmin')
@section('content')
    @include('layouts.headers.cards')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 mb-5 mb-xl-3">
                <div class="card bg-transparent  shadow">



                    <img class="card-img-top" src="{{ asset('argon') }}/img/silent-moon-asset-2.png" alt="Card image cap">

                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-dark ls-1 mb-1">Overview</h6>
                                <h2 class="text-silentGreen mb-0">ADMIN</h2>
                            </div>
                            <div class="col">
                                <ul class="nav nav-pills justify-content-end">
                                    <li class="nav-item mr-2 mr-md-0">
                                        <a href="{{ route('new.survey', 'Create new') }}" class="nav-link py-2 px-3 active">
                                            <span class="d-md-block">Create New Survey</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @forelse ($surveys as $survey)
            <div class="col-xl-12 mb-xl-3 mb-3">
                <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <a title="Edit Survey" class="secondary-content" href="survey/{{ $survey->id }}">
                                    <h1 class="text-silentGreen mb-0">{{ $survey->title }}</h1>
                                </a>

                                </div>
                                <div class="col">
                                    <ul class="nav justify-content-end">
                                        <a title="Take Survey" class="m-1" href="survey/view/{{ $survey->id }}">
                                        <button type="button" class="btn btn-outline-primary btn-sm">Take Survey</button>
                                    </a>
                                    <a title="Edit Survey"  class="m-1" href="survey/{{ $survey->id }}">
                                    <button type="button" class="btn btn-primary btn-sm">Edit Survey</button>
                                    </a>

                                    <a title="View Survey Answers" class="m-1"  href="survey/answers/{{ $survey->id }}">
                                        <button type="button" class="btn btn-primary btn-sm">View Answers</button>
                                    </a>

                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="text-uppercase text-dark ls-1 mb-1">{{ $survey->description }}</h5>
                        <small class="text-muted">Survey ID: {{ $survey->id }}</small>
                        <small class="text-muted">Created by: {{ $survey->user->name }}</small>
                    </div>
                </div>
            </div>
            @empty
            <p class="flow-text center-align">Nothing to show</p>
            @endforelse
        </div>
            <div class="row">
             <div class="col-xl-4 mb-5">
                <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-muted ls-1 mb-1">Performance</h6>
                                <h2 class="mb-0">Total Meditations</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Chart -->
                        <div class="chart">
                            <canvas id="chart-orders" class="chart-canvas"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Active Users</h3>
                            </div>
                            <div class="col text-right">
                                <a href="#!" class="btn btn-sm btn-primary">See all</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">User Name</th>
                                    <th scope="col">Surveys</th>
                                    <th scope="col">Meditations</th>
                                    <th scope="col">Bounce rate</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                       User1
                                    </th>
                                    <td>
                                        4,569
                                    </td>
                                    <td>
                                        340
                                    </td>
                                    <td>
                                        <i class="fas fa-arrow-up text-success mr-3"></i> 46,53%
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        User1
                                    </th>
                                    <td>
                                        3,985
                                    </td>
                                    <td>
                                        319
                                    </td>
                                    <td>
                                        <i class="fas fa-arrow-down text-warning mr-3"></i> 46,53%
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        User1
                                    </th>
                                    <td>
                                        3,513
                                    </td>
                                    <td>
                                        294
                                    </td>
                                    <td>
                                        <i class="fas fa-arrow-down text-warning mr-3"></i> 36,49%
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        User1
                                    </th>
                                    <td>
                                        2,050
                                    </td>
                                    <td>
                                        147
                                    </td>
                                    <td>
                                        <i class="fas fa-arrow-up text-success mr-3"></i> 50,87%
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        User1
                                    </th>
                                    <td>
                                        1,795
                                    </td>
                                    <td>
                                        190
                                    </td>
                                    <td>
                                        <i class="fas fa-arrow-down text-danger mr-3"></i> 46,53%
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        User1
                                    </th>
                                    <td>
                                        1,795
                                    </td>
                                    <td>
                                        190
                                    </td>
                                    <td>
                                        <i class="fas fa-arrow-down text-danger mr-3"></i> 46,53%
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        User1
                                    </th>
                                    <td>
                                        1,795
                                    </td>
                                    <td>
                                        190
                                    </td>
                                    <td>
                                        <i class="fas fa-arrow-down text-danger mr-3"></i> 46,53%
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection
@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
