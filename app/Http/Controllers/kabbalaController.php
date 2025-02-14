<?php

namespace App\Http\Controllers;

use App\Models\Fortune;
use Illuminate\Http\Request;

class KabbalaController extends Controller
{
    public function result(Request $request){

        // バリデーション
        // https://readouble.com/laravel/10.x/ja/validation.html#available-validation-rules
        $request->validate([
            // 整数型で4桁
            'year' => ['required', 'numeric', 'digits:4'],
            // 整数型で1-2桁, 1～12 まで
            'month' => ['required', 'numeric', 'digits_between:1,2', 'min:1', 'max:12'],
            // 整数型で1-2桁, 1～31 まで
            'day' => ['required', 'numeric', 'digits_between:1,2', 'min:1', 'max:31'],
        ]);

        // Model読み込み
        $fortunes = Fortune::get();

        // 誕生数を計算する
        $birthNumber = Fortune::calcBirthNumber
        (
            $request->input('year'),
            $request->input('month'),
            $request->input('day'),
        );

        // 占いの決定
        $fortune = $fortunes[--$birthNumber];

        return view('result', compact('fortune'));
    }
}