<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rap', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tenrap');
            $table->string('diachi');
            $table->unsignedBigInteger('hethongrap_id');
            $table->timestamps();
        });

        Schema::table('rap', function (Blueprint $table) {
            $table->foreign('hethongrap_id')->references('id')->on('hethongrap')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comments', function(Blueprint $table) {
			$table->dropForeign('rap_hethongrap_id_foreign');
		});
        Schema::dropIfExists('rap');
    }
}
