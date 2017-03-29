<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserQuestion;
use Auth;

class QuestionController extends Controller {
    
    private $request;

    public function __construct(Request $request) {
        $this->middleware('auth');
        $this->request = $request;

    }

    public function create() {

        $question = new UserQuestion([
            'content' => $this->request['question'],
            'status' => "new",
        ]);

        $this->getUser()->userQuestions()->save($question);

        return redirect()->back();
    }

    public function show() {  
        
        $questions = $this->getUser()->userQuestions;      

        return view('show_questions')->withQuestions($questions);
    }
    
    private function getUser() {
        
        return $this->request->user();
    }

}
