<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChengeProductsPhoto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            // noteカラムにNULLを許容
            $table->string('photo')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            // 既にテーブルの対象カラムにNULLを登録しているならば必要
            // DB::statement('UPDATE `book` SET `note` = "" WHERE `note` IS NULL');

            // noteカラムにNULLを許容しない
            // 5.5以降？
            $table->string('photo')->nullable(false)->change();
        });
    }
}
