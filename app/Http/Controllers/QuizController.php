<?php

namespace App\Http\Controllers;

use App\Models\HCP;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\UserAnswer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class QuizController extends Controller
{
    public function checkAnswer(Request $request)
    {
        $data = $request->except('_token'); // Exclude CSRF token from processing

        // Retrieve the question ID from the request
        $questionId = $request->input('id');

        // Fetch the specific question by ID
        $question = Question::find($questionId);

        if (!$question) {
            return response()->json(['message' => 'Question not found.'], 404);
        }

        // Decode the JSON options to PHP array if necessary
        $options = is_string($question->options) ? json_decode($question->options, true) : $question->options;

        // Ensure options are correctly decoded
        if (!is_array($options)) {
            return response()->json(['message' => 'Invalid question options format.'], 500);
        }

        // Retrieve the correct answer key
        $correctAnswerKey = $question->correct_answer;
        // Retrieve the correct answer value
        $correctAnswerValue = $options[$correctAnswerKey] ?? 'Unknown';
        // dd($request->all());
        if ($request['question_1'] == $question->correct_answer) {
            $message = 'Your answer is correct';
        } else {
            $message = "Your answer is incorrect. The correct answer is:  . $correctAnswerValue";
        }
        // // Initialize variable for correct answer check
        // $isCorrect = false;

        // // Iterate through the provided answers
        // foreach ($data as $key => $answer) {
        //     if (strpos($key, 'question_') === 0) {
        //         $currentQuestionId = str_replace('question_', '', $key);

        //         // Check if the provided answer is correct
        //         if ($currentQuestionId == $questionId && $correctAnswerValue == $answer) {
        //             $isCorrect = true;
        //             break; // Exit the loop early if the correct answer is found
        //         }
        //     }
        // }

        // // Flash a message with the result
        // $message = $isCorrect ? 'Your answer is correct.' : 'Your answer is incorrect. The correct answer is: ' . $correctAnswerValue;
        // dd($message);
        Session::flash('message', $message);

        // Return the view
        return view('temp');
    }
    public function checkAnswer2(Request $request)
    {
        $data = $request->except('_token'); // Exclude CSRF token from processing

        // Retrieve the question ID from the request
        $questionId = $request->input('id');

        // Fetch the specific question by ID
        $question = Question::find($questionId);

        if (!$question) {
            return response()->json(['message' => 'Question not found.'], 404);
        }

        // Decode the JSON options to PHP array if necessary
        $options = is_string($question->options) ? json_decode($question->options, true) : $question->options;

        // Ensure options are correctly decoded
        if (!is_array($options)) {
            return response()->json(['message' => 'Invalid question options format.'], 500);
        }

        // Retrieve the correct answer key
        $correctAnswerKey = $question->correct_answer;
        // Retrieve the correct answer value
        $correctAnswerValue = $options[$correctAnswerKey] ?? 'Unknown';
        if ($request['question_2'] == $question->correct_answer) {
            $message = 'Your answer is correct';
        } else {
            $message = "Your answer is incorrect. The correct answer is:  . $correctAnswerValue";
        }
        // dd($message);
        // // Initialize variable for correct answer check
        // $isCorrect = false;

        // // Iterate through the provided answers
        // foreach ($data as $key => $answer) {
        //     if (strpos($key, 'question_') === 0) {
        //         $currentQuestionId = str_replace('question_', '', $key);

        //         // Check if the provided answer is correct
        //         if ($currentQuestionId == $questionId && $correctAnswerValue == $answer) {
        //             $isCorrect = true;
        //             break; // Exit the loop early if the correct answer is found
        //         }
        //     }
        // }

        // // Flash a message with the result
        // $message = $isCorrect ? 'Your answer is correct.' : 'Your answer is incorrect. The correct answer is: ' . $correctAnswerValue;
        // dd($message);
        Session::flash('message', $message);

        // Return the view
        return view('temp1');
    }

    // public function nextPage()
    // {
    //     # code...

    //     return view('thank-you',['id' => 2]);
    // }
    public function nextPage()
    {
        // dd($id);
        $qy = "select * from questions where id = '2'";
        $questions = DB::select($qy);
        // $questions = Question::where('id',$id)->get();
        return view('question2', ['questions' => $questions]);
    }
    public function thankyou()
    {
        return view('thankyou2');
    }
}
