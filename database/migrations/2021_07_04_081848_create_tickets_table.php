<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('maghe');
            $table->boolean('dadat')->default(false);
            $table->boolean('vip')->default(false);
            $table->unsignedBigInteger('suatchieu_id');
            $table->timestamps();
        });

        Schema::table('tickets', function (Blueprint $table) {
            $table->foreign('suatchieu_id')->references('id')->on('suatchieu')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tickets', function(Blueprint $table) {
			$table->dropForeign('tickets_suatchieu_id_foreign');
		});
        Schema::dropIfExists('tickets');
    }
}