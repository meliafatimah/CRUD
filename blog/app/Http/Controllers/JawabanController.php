<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnswerModel;

class JawabanController extends Controller
{
    public function store(Request $request) {
        //dd($request->all());
        $new_answer = AnswerModel::save($request->all());
        return redirect('/jawaban/{pertanyaan_id}');
    }
    public function index() {
        $answer = AnswerModel::get_all();
        return view('answer.index', compact('answer'));
    }
}
