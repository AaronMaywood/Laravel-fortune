<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FortuneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $fortunes = [
            // 誕生数1
            [
                'name' => 'ドラゴン',
                'personality' =>
                    "
                    誕生数1のあなたは自信に満ちたリーダータイプ。
                    目標に対して真摯に取り組み、周りの人々を引っ張っていく力を持っています。
                    エネルギッシュで行動力抜群、時に自己主張が強すぎることもありますが、それがあなたの魅力でもあります。
                    ",
                'self_growth' =>
                    "
                    今すぐではなくても、リーダーシップを発揮できる環境を見つけることが重要です。
                    営業職や管理職、プロジェクトリーダーなど、組織を引っ張る立場に向いています。
                    スタートアップ企業など、自由度の高い仕事で成長できるはずです。
                    ",
                'career_growth' =>
                    "
                    明確な目標を達成するために、努力する姿勢を保つことが大切です。
                    自己成長を常に意識し、チームの成果に貢献しながら昇進を狙っていきましょう。
                    スキルアップにも意欲的に取り組んでください。
                    ",
                'relationship_growth' =>
                    "
                    あなたは強い個性を持っていますが、時にその強さが周りに圧をかけてしまうことも。
                    相手の意見にも耳を傾けるなど、協調性を意識すると人間関係がスムーズに進みますよ。
                    ",
                'future_preparation' =>
                    "
                    自分に正直に生き、挑戦し続けること。
                    理想を追い求めつつも、周囲と協力しながら成し遂げていくことが開運のカギ。
                    焦らず、段階的に進むことが大切です。
                    ",
                'lucky_words' =>
                    "
                    「今日は最高の一日だ！」<br>
                    ポジティブな言葉を繰り返すことで、あなたのエネルギーがより高まり、運気も良くなりますよ。
                    ",
                'lucky_items' =>
                    "
                    赤色のアイテム、特に赤いブレスレットやリストバンドが効果的。
                    エネルギーを高め、運を引き寄せます。
                    金属製のアクセサリーもリーダーシップをサポートします。
                    ",
            ],
        ];

        foreach ($fortunes as $f)
        {
            DB::table('career_fortunes')->insert([
                'name' => $f['name'],
                'personality' => $f['personality'],
                'self_growth' => $f['self_growth'],
                'career_growth' => $f['career_growth'],
                'relationship_growth' => $f['relationship_growth'],
                'future_preparation' => $f['future_preparation'],
                'lucky_words' => $f['lucky_words'],
                'lucky_items' => $f['lucky_items'],
            ]);
        }
    }
}
