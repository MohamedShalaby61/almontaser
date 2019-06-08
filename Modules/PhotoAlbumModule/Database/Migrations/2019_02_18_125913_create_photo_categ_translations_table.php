<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotoCategTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photo_categ_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->integer('photo_categ_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['photo_categ_id', 'locale']);
            $table->foreign('photo_categ_id')->references('id')->on('photo_categs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photo_categ_translations');
    }
}
