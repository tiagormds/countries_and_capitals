<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    private $app_data;

    public function __construct()
    {
        // load app_data.php file from folder
        $this->app_data = require(app_path('app_data.php'));
    }

    public function startGame(): View
    {
        return view('home');
    }

    public function prepareGame(Request $request)
    {
        //validate request
        $request->validate([
            'total_questions' => 'required|integer|min:3|max:30',
        ],[
            'total_questions.required' => 'O número de questões é obrigatório',
            'total_questions.integer' => 'O número de questões tem que ser valor inteiro',
            'total_questions.min' => 'No mínimo :min questões',
            'total_questions.max' => 'No mínimo :max questões',
        ]);

        //get total questions
        $total_questions = intval($request->input('total_questions'));

        //prepare all the quiz structure
        $quiz = $this->prepareQuiz($total_questions);

        dd($quiz);
    }

    private function prepareQuiz($total_questions)
    {

    }
}
