<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create() {
        
        print_r($_POST['question']);
        
        return;
        
    }
}
