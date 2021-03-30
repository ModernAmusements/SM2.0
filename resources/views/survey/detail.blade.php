@extends('layouts.appAdmin')
@section('content')
@include('layouts.headers.cardsAdmin')
<div class="container-fluid mb-5 mt--7">
    <div class="row">
        <div class="col-xl-12 mb-5 mb-xl-0">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-transparent pb-1">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-uppercase text-dark ls-1 mb-1">Edit New Survey</h6>
                            <h2 class="text-silentGreen mb-1">{{ $survey->title }}</h2>
                            <p class="text-dark">
                                {{ $survey->description }}
                            </p>
                            <a href="view/{{$survey->id}}">Take Survey</a> | <a href="{{$survey->id}}/edit">Edit
                                Survey Title</a> | <a href="/survey/answers/{{$survey->id}}">View Answers</a> <a
                                href="#doDelete" style="float:right;" class="modal-trigger red-text">Delete Survey</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="doDelete" class="modal bottom-sheet">
                        <div class="modal-content">
                            <div class="container">
                                <div class="row">
                                    <h4>Are you sure?</h4>
                                    <p>Do you wish to delete this survey called "{{ $survey->title }}"?</p>
                                    <div class="modal-footer">
                                        <a href="/survey/{{ $survey->id }}/delete"
                                            class=" modal-action waves-effect waves-light btn-flat red-text">Yep
                                            yep!</a>
                                        <a
                                            class=" modal-action modal-close waves-effect waves-light green white-text btn">No,
                                            stop!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 class="text-silentGreen">Questions</h2>
                    <div class="collapsible" data-collapsible="expandable">
                        @forelse ($survey->questions as $question)
                        <div>
                            <div class="collapsible-header d-flex justify-content-between">
                                <h4 class="text-dark mb-1">{{ $question->title }}</h4>
                                <a href="/question/{{ $question->id }}/edit" style="float:right;">Edit</a>
                            </div>
                            <div class="collapsible-body">
                                {!! Form::open() !!}
                                @if($question->question_type === 'text')
                                {{-- {{ Form::text('title')}} --}}
                                <div class="form-group">
                                <div class="input-group input-group-alternative mt-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Your Answer:</span>
                                    </div>
                                    <input id="text" name="title" type="text" class="form-control form-control-alternative"></input>
                                </div>
                                </div>
                                @elseif($question->question_type === 'textarea')
                                <div class="form-group">
                                    <div class="input-group input-group-alternative mt-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Your Answer:</span>
                                        </div>
                                    <textarea id="textarea1" class="form-control"></textarea>
                                </div>
                                </div>
                                @elseif($question->question_type === 'radio')
                                <div class="form-group">
                                @foreach($question->option_name as $key=>$value)
                                <div class="custom-control  custom-control-alternative custom-radio">
                                    <input class="custom-control-input" type="radio" id="{{ $question->id }}{{ $value }}"  name="{{ $question->id }}[{{ $value }}]" />
                                    <label class="custom-control-label text-dark" for="{{ $question->id }}{{ $value }}">{{ $value }}</label>
                                </div>
                                @endforeach
                                </div>
                                @elseif($question->question_type === 'checkbox')
                                <div class="form-group">
                                @foreach($question->option_name as $key=>$value)
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="{{ $question->id }}{{ $value }}" name="{{ $question->id }}[{{ $value }}]"/>
                                    <label class="custom-control-label text-dark" for="{{ $question->id }}{{ $value }}">{{ $value }}</label>
                                </div>
                                @endforeach
                                </div>
                                @elseif($question->question_type === 'panas')
                                <div class="form-group">
                                    <div class="custom-control custom-radio  ">
                                        <input type="radio" id="{{ $question->id }}[answer]1" value="1" name="{{ $question->id }}[answer]1" class="custom-control-input">
                                        <label class="custom-control-label" for="{{ $question->id }}[answer]1">Very Slightly or Not At All</label>
                                      </div>
                                      <div class="custom-control custom-radio  ">
                                        <input type="radio" id="{{ $question->id }}[answer]2" value="2"  name="{{ $question->id }}[answer]" class="custom-control-input">
                                        <label class="custom-control-label" for="{{ $question->id }}[answer]2">A Little</label>
                                      </div>
                                      <div class="custom-control custom-radio  ">
                                        <input type="radio" id="{{ $question->id }}[answer]3" value="3"  name="{{ $question->id }}[answer]" class="custom-control-input">
                                        <label class="custom-control-label" for="{{ $question->id }}[answer]3">Moderately</label>
                                      </div>
                                      <div class="custom-control custom-radio  ">
                                        <input type="radio" id="{{ $question->id }}[answer]4" value="4"  name="{{ $question->id }}[answer]" class="custom-control-input">
                                        <label class="custom-control-label" for="{{ $question->id }}[answer]4">Quite a Bit</label>
                                      </div>
                                      <div class="custom-control custom-radio  ">
                                        <input type="radio" id="{{ $question->id }}[answer]5" value="5" name="{{ $question->id }}[answer]" class="custom-control-input">
                                        <label class="custom-control-label" for="{{ $question->id }}[answer]5">Extremely</label>
                                      </div>
                                </div>
                                @endif
                                {!! Form::close() !!}
                            </div>
                        </div>
                        @empty
                        <span>Nothing to show. Add questions below.</span>
                        @endforelse
                    </div>
                    <h2 class="text-silentGreen mt-2 mb-0">Add Question</h2>
                    <form method="POST" action="{{ $survey->id }}/questions" id="boolean">
                        <div class="form-group">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <select class="custom-select input-group-alternative" multiple name="question_type" id="question_type">
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="panas">PANAS</option>
                                    <option value="text">Text</option>
                                    <option value="textarea">Textarea</option>
                                    <option value="checkbox">Checkbox</option>
                                    <option value="radio">Radio Buttons</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-alternative mt-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Question:</span>
                                    </div>
                                    <input name="title" id="title" type="text" class="form-control form-control-alternative"></input>
                                </div>
                            </div>
                            <!-- this part will be chewed by script in init.js -->
                            <span class="form-g"></span>
                            <div class="input-field">
                                <button class="btn btn-primary btn-lg btn-block">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
{{-- @include('layouts.footers.auth') --}}
@endsection
@push('js')
<script src="{{ asset('argon') }}/js/init.js"></script>
<script src="{{ asset('argon') }}/js/materialize.js"></script>
@endpush
