<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Survey;
use App\Answer;
use App\Http\Requests;
use Illuminate\Support\Arr;


class AnswerController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function store(Request $request, Survey $survey)
  {

    // remove the token
    $arr = $request->except('_token');

    foreach ($arr as $key => $value) {
      $newAnswer = new Answer();
      if (!is_array($value)) {
        $newValue = $value['answer'];
      } else {
        if (Arr::has($value, 'answer')) {
          $newValue = ($value['answer']);
          $newAnswer->option_answer = '';
          $newAnswer->answer = $newValue;
        } else {
          $option_answer = Arr::except($value, ['answer']);
          $newAnswer->option_answer = json_encode($option_answer);
          $newAnswer->answer = "Checkbox Input:";
        }
      }

      $newAnswer->question_id = $key;
      $newAnswer->user_id = Auth::id();
      $newAnswer->survey_id = $survey->id;

      $newAnswer->save();

      $answerArray[] = $newAnswer;
    };
    return redirect()->action('SurveyController@view_survey_answers', [$survey->id,]);
  }
}
