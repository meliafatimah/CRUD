<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuestionModel;

class PertanyaanController extends Controller
{
    public function create() {
        return view('question.form');
    }
    public function store(Request $request) {
        //dd($request->all());
        $new_question = QuestionModel::save($request->all());

        return redirect('/pertanyaan');
    }

    public function index() {
        $question = QuestionModel::get_all();
        //dd($question);
        return view('question.index',compact('question'));
    }
}
