<?php
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 Auth::routes();

 Route::get('/', function () {
     return view('welcome');
 });

 Route::get('/welcome', function () {
    return view('welcome');
});


 Route::get('/intro', function () {
    return view('intro');
});

Route::get('/preScreening', function () {
    return view('preScreening');
});

Route::get('/screening', function () {
    return view('screening');
});

Route::get('/thankYou', function () {
    return view('thankYou');
});

 Route::get('/startSilentmoon', function () {
    return view('startSilentmoon');
});


Route::get('/startScreening', function () {
    return view('startScreening');
});


Route::group(['middleware' => 'auth'], function () {

    // Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/home', 'SurveyController@home')->name('home');

    Route::get('/silentMoon', 'SurveyController@silentMoon')->name('silentMoon');

    Route::get('/survey/view/{survey}', 'SurveyController@view_survey')->name('view.survey');

    Route::get('/survey/answers/{survey}', 'SurveyController@view_survey_answers')->name('view.survey.answers');

    Route::post('/survey/view/{survey}/completed', 'AnswerController@store')->name('complete.survey');



	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

Route::group(['middleware' => 'admin'], function () {


    Route::get('/admin', 'SurveyController@admin')->name('admin');

    Route::get('/survey/new', 'SurveyController@new_survey')->name('new.survey');
    Route::get('/survey/{survey}', 'SurveyController@detail_survey')->name('detail.survey');


});



Route::post('/survey/create', 'SurveyController@create')->name('create.survey');

Route::get('/survey/{survey}/delete', 'SurveyController@delete_survey')->name('delete.survey');
Route::get('/survey/{survey}/edit', 'SurveyController@edit')->name('edit.survey');

Route::patch('/survey/{survey}/update', 'SurveyController@update')->name('update.survey');



Route::post('/survey/{survey}/questions', 'QuestionController@store')->name('store.question');

Route::get('/question/{question}/edit', 'QuestionController@edit')->name('edit.question');

Route::patch('/question/{question}/update', 'QuestionController@update')->name('update.question');

Route::auth();
