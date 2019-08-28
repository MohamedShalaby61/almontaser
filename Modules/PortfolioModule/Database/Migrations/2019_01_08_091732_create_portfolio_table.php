<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfolioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('photo')->nullable();
            $table->string('cover_photo')->nullable();
            $table->integer('portfolio_category_id')->unsigned();
            $table->foreign('portfolio_category_id')->references('id')->on('portfolio_category')->onDelete('cascade');
            $table->integer('created_by')->unsigned()->nullable();
            $table->foreign('created_by')->references('id')->on('admins')->onDelete('set null');
            $table->timestamps();
        });

        # Translation
        Schema::create('portfolio_translation', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->integer('portfolio_id')->unsigned();
            $table->string('meta_title')->nullable();
            $table->string('meta_desc')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('slug')->nullable();
            $table->string('locale')->index();
            $table->unique(['portfolio_id', 'locale']);
            $table->foreign('portfolio_id')->references('id')->on('portfolio')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolio');
        Schema::dropIfExists('portfolio_translation');
    }
}
