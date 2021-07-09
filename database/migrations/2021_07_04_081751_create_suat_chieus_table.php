<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuatChieusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suatchieu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('thoigian');
            $table->unsignedBigInteger('film_id');
            $table->unsignedBigInteger('rap_id');
            $table->timestamps();
        });

        Schema::table('suatchieu', function (Blueprint $table) {
            $table->foreign('film_id')->references('id')->on('films')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('rap_id')->references('id')->on('rap')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('suatchieu', function(Blueprint $table) {
			$table->dropForeign('suatchieu_film_id_foreign');
			$table->dropForeign('suatchieu_rap_id_foreign');
		});
        Schema::dropIfExists('suatchieu');
    }
}