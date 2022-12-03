<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_to_news', function (Blueprint $table) {
            $table->unsignedBigInteger('news_id');
            $table->unsignedBigInteger('image_id');
            $table->foreign('news_id')->references('id')->on('news')->onDelete('cascade');
            $table->foreign('image_id')->references('id')->on('galleries')->onDelete('cascade');
            $table->primary(['news_id','image_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image_to_news');
    }
};
