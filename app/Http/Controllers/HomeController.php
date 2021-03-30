<?php
namespace App\Http\Controllers;
namespace App\Http\Controllers;
use Auth;
use App\Survey;
use App\Answer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     *@return \Illuminate\View\View
     */
    //
    // public function index()
    // {
    //     return view('dashboard');
    // }

    public function index(Request $request)
     {
      $surveys = Survey::get();
      return view('dashboard', compact('surveys'));
    }
}
