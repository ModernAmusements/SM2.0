<?php

namespace App\Http\Controllers;
use Auth;
use App\Survey;
use App\Answer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class SurveyController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
    $this->middleware('admin')->except(['home', 'view_survey', 'silentMoon', 'view_survey_answers']);
  }

  public function home(Request $request)
  {
    $surveys = Survey::get();
    return view('dashboard', compact('surveys'));
  }

  public function admin(Request $request)
  {
    $surveys = Survey::get();
    return view('admin.admin', compact('surveys'));
  }

  # Show page to create new survey
  public function new_survey()
  {
    return view('survey.new');
  }

  public function create(Request $request, Survey $survey)
  {
    $arr = $request->all();
    $request->validate(
        [
            'title' => 'required|min:3',
            'description' => 'required|min:5',

        ]
    );
    $arr['user_id'] = Auth::id();
    $surveyItem = $survey->create($arr);
    return Redirect::to("/survey/{$surveyItem->id}");
  }

  # retrieve detail page and add questions here
  public function detail_survey(Survey $survey)
  {
    $survey->load('questions.user');
    return view('survey.detail', compact('survey'));
  }


  public function edit(Survey $survey)
  {
    return view('survey.edit', compact('survey'));
  }

  # edit survey
  public function update(Request $request, Survey $survey)
  {
    $survey->update($request->only(['title', 'description']));
    return redirect()->action('SurveyController@detail_survey', [$survey->id]);
  }

  # view survey publicly and complete survey
  public function view_survey(Survey $survey)
  {
    $survey->option_name = unserialize($survey->option_name);
    return view('survey.view', compact('survey'));
  }

  # view submitted answers from current logged in user
  public function view_survey_answers(Survey $survey)
  {
    $survey->load('user.questions.answers');
    // return view('survey.detail', compact('survey'));
    // return $survey;
    if (Auth::user() && auth()->user()->role !== 'admin') {
        return view('survey.thankYou');
    } else {
        return view('answer.view', compact('survey'));
    }
  }


  // TODO: Make sure user deleting survey
  // has authority to
  public function delete_survey(Survey $survey)
  {
    $survey->delete();
    return redirect('');
  }

}
