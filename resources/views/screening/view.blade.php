@extends('layouts.app')
@section('content')
@include('layouts.headers.cards')
<div class="container-fluid mb-5 mt--7">
    <div class="modal fade show" id="silentMoonModal" tabindex="-1" role="dialog" aria-labelledby="silentMoonModal" aria-modal="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="modal-title-default">Short survey after intervetion</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Got it!</button>
              <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">More Info</button>
            </div>
          </div>
        </div>
      </div>
    <div class="row">
        <div class="col-xl-12 mb-5 mb-xl-0">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-transparent pb-1">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-uppercase text-dark ls-1 mb-1">Start taking Survey</h6>
                            <h1 class="text-silentGreen mb-1">{{ $survey->title }}</h1>
                            <p class="text-dark">
                                {{ $survey->description }}
                            </p>
                              <br/>Created by: <a href="">{{ $survey->user->name }}</a>
                        </div>
                    </div>
                </div>
        <div class="card-body">
          {!! Form::open(array('action'=>array('AnswerController@store', $survey->id))) !!}
          @forelse ($survey->questions as $key=>$question)
            <h3 class="text-dark mb-1"><p class="text-muted">Question {{ $key+1 }}</p>{{ $question->title }}</h3>
                @if($question->question_type === 'text')
                <div class="form-group">
                  <div class="input-field input-group-alternative ">
                    <input id="answer" type="text" class="form-control form-control-alternative" name="{{ $question->id }}[answer]">
                  </div>
                </div>
                @elseif($question->question_type === 'textarea')
                <div class="form-group">
                  <div class="input-field input-group input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Max:30 Words</span>
                    </div>
                    <textarea id="textarea1" class="form-control" name="{{ $question->id }}[answer]"></textarea>
                  </div>
                </div>
                @elseif($question->question_type === 'radio')
                <div class="form-group">
                  @foreach($question->option_name as $key=>$value)
                  <div class="custom-control custom-control-alternative custom-radio">
                      <input class="custom-control-input" type="radio" id="{{ $question->id }}{{ $value }}"  name="{{ $question->id }}[{{ $value }}]" />
                      <label class="custom-control-label text-dark" for="{{ $question->id }}{{ $value }}">{{ $value }}</label>
                  </div>
                  @endforeach
                </div>
                @elseif($question->question_type === 'checkbox')
                <div class="form-group">
                  @foreach($question->option_name as $key=>$value)
                  <div class="custom-control custom-control-alternative custom-checkbox">
                    <input class="custom-control-input" type="checkbox"  id="{{ $question->id }}{{ $value }}" name="{{ $question->id }}[{{ $value }}]"/>
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
              <div class="divider" style="margin:10px 10px;"></div>
             @empty
           <span class='flow-text center-align'>Nothing to show</span>
          @endforelse
        {{ Form::submit('Submit Survey', array('class'=>'btn btn-primary btn-lg btn-block mt-5')) }}
        {!! Form::close() !!}
    </div>
  </div>
</div>
{{-- @include('layouts.footers.auth') --}}
@endsection
@push('js')
<script>
    $(window).on('load', function() {
    $('#silentMoonModal').modal('show');
});

</script>
<script src="{{ asset('argon') }}/js/init.js"></script>
<script src="{{ asset('argon') }}/js/materialize.js"></script>
@endpush
