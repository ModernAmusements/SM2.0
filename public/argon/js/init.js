$(document).ready(function() {
  $('.collapsible').collapsible({
    accordion: false
  });
  $('.modal-trigger').leanModal();
  // will replace .form-g class when referenced
  var material = '<div class="form-group">' +
  '<div class="input-group input-field input-group-alternative">' +
    '<button type="button" class="delete-option btn btn-danger">Delete</button>' +
    '<button type="button" class="add-option btn btn-success">Add</button>' +
    '<div class="input-group-prepend"><span class="input-group-text">Options:</span></div>' +
    '<input class="form-control form-control-alternative" name="option_name[]" id="option_name[]" type="text">' +
    '</div>' +
    '</div>';
  var panas = '<div class="form-group">' +
    '<div class="custom-control custom-radio  ">' +
    '<input type="radio" id="{{ $question->id }}[answer]1" value="1" name="{{ $question->id }}[answer]1" class="custom-control-input">' +
    '<label class="custom-control-label" for="{{ $question->id }}[answer]1">Very Slightly or Not At All</label>' +
    '</div>' +
    '<div class="custom-control custom-radio  ">' +
    '<input type="radio" id="{{ $question->id }}[answer]2" value="2"  name="{{ $question->id }}[answer]" class="custom-control-input">' +
    '<label class="custom-control-label" for="{{ $question->id }}[answer]2">A Little</label>' +
    '</div>' +
    '<div class="custom-control custom-radio  ">' +
    '<input type="radio" id="{{ $question->id }}[answer]3" value="3"  name="{{ $question->id }}[answer]" class="custom-control-input">' +
    '<label class="custom-control-label" for="{{ $question->id }}[answer]3">Moderately</label>' +
    '</div>' +
    '<div class="custom-control custom-radio  ">' +
    '<input type="radio" id="{{ $question->id }}[answer]4" value="4"  name="{{ $question->id }}[answer]" class="custom-control-input">' +
    '<label class="custom-control-label" for="{{ $question->id }}[answer]4">Quite a Bit</label>' +
    '</div>' +
    '<div class="custom-control custom-radio  ">' +
    '<input type="radio" id="{{ $question->id }}[answer]5" value="5" name="{{ $question->id }}[answer]" class="custom-control-input">' +
    '<label class="custom-control-label" for="{{ $question->id }}[answer]5">Extremely</label>' +
    '</div>' +
    '</div>' ;



  // for adding new option
  $(document).on('click', '.add-option', function() {
    $(".form-g").append(material);
  });
  $(document).on('click', '.delete-option', function() {
    $(this).parent(".input-field").remove();
  });
  // allow for more options if radio or checkbox is enabled
  $(document).on('change', '#question_type', function() {
    var selected_option = $('#question_type :selected').val();
    if (selected_option === "radio" || selected_option === "checkbox") {
      $(".form-g").html(material);
    } else {
      $(".input-g").remove();
    }
    if (selected_option === "panas"){
        $(".form-g").html(panas);
      } else {
        $(".input-g").remove();
      }
  });
});
