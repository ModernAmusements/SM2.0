@extends('layouts.appAdmin')

@section('content')
@include('layouts.headers.cardsAdmin')

<div class="container-fluid mb-5 mt--7">
    <div class="row">
        <div class="col-xl-12 mb-5 mb-xl-0">
            <div class="card  shadow">
                <div class="card-header bg-transparent pb-1">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-uppercase text-dark ls-1 mb-1">Survey Answers</h6>
                            <h1 class="text-silentGreen mb-1">{{ $survey->title }}</h1>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                <table  class="table align-items-center">
                  <thead>
                    <tr>
                        <th  scope="col" data-field="id">Question</th>
                        <th  scope="col" data-field="name">Answer(s)</th>
                    </tr>
                  </thead>

                  <tbody>
                    @forelse ($survey->questions as $item)
                    <tr>
                      <td class="text-dark">{{ $item->title }}</td>
                      @foreach ($item->answers as $answer)
                        <td class="text-dark">{{ $answer->answer }}
                            <br/>  {{ $answer->option_answer }} <br/> <em>encrypted User ID:</em>  {{ $answer->user_id }} <br/>
                        <small>{{ $answer->created_at->format('d.m.Y') }}</small></td>
                      @endforeach
                    </tr>
                    @empty
                      <tr>
                        <td>
                          No answers provided by you for this Survey
                        </td>
                        <td></td>
                      </tr>
                    @endforelse
                  </tbody>
                </table>
            </div>
            <div class="text-right">
                <button id="export" data-export="export" class="btn btn-lg btn-neutral mt-4">{{ __('Download Results') }}</button>
             </div>
            </div>
        </div>
    </div>

</div>



</div>
{{-- @include('layouts.footers.auth') --}}
@endsection

@push('js')
<script>
    $.prototype.kb_table_csv = function() {

var kb_tidy_content = function(text){
  text = text.replace(/"/g, '""');
  return '"'+text+'"';
};

$(this).each(function(){
  var table = $(this);
  var caption = $(this).find('caption').text();
  var title = [];
  var rows = [];

  $(this).find('tr').each(function(){
   var data = [];
   $(this).find('th').each(function(){
   var text = kb_tidy_content($(this).text());
   title.push(text);
  });

  $(this).find('td').each(function(){
   var text = kb_tidy_content($(this).text());
   data.push(text);
  });

  data = data.join(",");
  rows.push(data);
 });

 title = title.join(",");
 rows = rows.join("\n");

 var csv = title + rows;
 var uri = 'data:text/csv;charset=utf-8,' + encodeURIComponent(csv);
 var download_link = document.createElement('a');
 download_link.href = uri;
 var ts = new Date().getTime();
 if(caption==""){
 download_link.download = ts+".csv";
 } else {
 download_link.download = caption+"-"+ts+".csv";
 }
 document.body.appendChild(download_link);
 download_link.click();
 document.body.removeChild(download_link);
 });
};
$("#export").click(function(){
  $("table").kb_table_csv();
});
</script>
<script src="{{ asset('argon') }}/js/init.js"></script>
<script src="{{ asset('argon') }}/js/materialize.js"></script>

@endpush
