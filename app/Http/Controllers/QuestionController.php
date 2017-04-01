<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserQuestion;

class QuestionController extends Controller {
    
    const STATUS_HAS_ANSWER = 'hasAnswer';
    const STATUS_NO_ANSWER = 'noAnswer';

    public function __construct() {

        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {

            $questions = $request->user()->userQuestions;

        return view('show_questions')->withQuestions($questions);
    }
    
    /**
     * Display a listing of the Questions hasAnswer.
     *
     * @return \Illuminate\Http\Response
     */
    public function questionsHasAnswer(Request $request) {
        
        $status = $request['status'];
        $questions = $request->user()->userQuestions->where('status', self::STATUS_HAS_ANSWER);
        
        return view('show_questions')->withQuestions($questions);
    }
    
    /**
     * Display a listing of the Questions noAnswer.
     *
     * @return \Illuminate\Http\Response
     */
    public function questionsNoAnswer(Request $request) {
        
        $status = $request['status'];
        $questions = $request->user()->userQuestions->where('status', self::STATUS_NO_ANSWER);
        
        return view('show_questions')->withQuestions($questions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $question = new UserQuestion([
            'content' => $request['question'],
            'status' => "new",
        ]);

        $request->user()->userQuestions()->save($question);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
