<?php

namespace App\Http\Controllers;

use App\Models\Fortune;
use Illuminate\Http\Request;

class kabbalaController extends Controller
{
    public function result(Request $request){

        // バリデーション
        // https://readouble.com/laravel/10.x/ja/validation.html#available-validation-rules
        $request->validate([
            // 整数型で4桁
            'year' => ['required', 'numeric', 'digits:4'],
            // 整数型で1-2桁, 12 まで
            'month' => ['required', 'numeric', 'digits_between:1,2', 'max:12'],
            // 整数型で1-2桁, 31 まで
            'day' => ['required', 'numeric', 'digits_between:1,2', 'max:31'],
        ]);

        // Model読み込み
        $fortunes = Fortune::get();

        // 誕生数を計算する
        // Step1. 誕生日の各桁を足す 例) 1970220 = 1 + 9 + 0 + 2 + 2 + 0 =  14
        $year = $request->input('year');
        $month = $request->input('month');
        $day = $request->input('day');
        $ymd = str_split($year . $month . $day);
        $ymd2 = 0;
        foreach($ymd as $number){
            $ymd2 += $number;
        }
        // Step2. 9 で割った余りが誕生数、ただし0の場合は9とする
        $birthNumber = $ymd2 % 9;
        if ($birthNumber === 0) {
            $birthNumber = 9;
        }

        // 占いの決定
        $fortune = $fortunes[--$birthNumber];

        return view('result', compact('fortune'));
    }
}
