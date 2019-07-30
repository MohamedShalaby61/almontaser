<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcheiveTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acheive_translation', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('acheive_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['acheive_id', 'locale']);
            $table->foreign('acheive_id')->references('id')->on('acheive')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acheive-translation');
    }
}
