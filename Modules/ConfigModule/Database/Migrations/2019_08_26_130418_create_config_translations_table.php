<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('config_id')->unsigned();
            $table->string('locale')->index();
            $table->string('display_name')->nullable();
            $table->text('value')->nullable();
            $table->unique(['config_id', 'locale']);
            $table->foreign('config_id')->references('id')->on('configs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('config_translations');
    }
}
