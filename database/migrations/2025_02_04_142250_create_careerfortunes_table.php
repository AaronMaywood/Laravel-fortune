<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('career_fortunes', function (Blueprint $table) {
            $table->id();
            $table->text('name');                   # キャラクター名
            $table->text('personality');            # 基本性格
            $table->text('self_growth');            # 自分自身を生かすには？
            $table->text('career_growth');          # キャリアアップするには？
            $table->text('relationship_growth');    # 人間関係をアップするには？
            $table->text('future_preparation');     # ５年後に後悔しないためには？
            $table->text('lucky_words');             # ラッキーワード
            $table->text('lucky_items');            # ラッキーアイテム
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('career_fortunes');
    }
};
