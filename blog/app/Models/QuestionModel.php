<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class QuestionModel {
    public static function get_all(){
        $question = DB::table('question')->get();
        return $question;
    }

    public static function save($data) {
        unset($data["_token"]);
        $new_question = DB::table('question')->insert($data);
        return $new_question;
    }
}

?>