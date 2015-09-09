<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ImageFiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_files', function (Blueprint $table) {
            $table->increments('id');
            /*
            $table -> integer('on_news') -> unsigned() -> default(0);
            $table->foreign('on_news')
                ->references('id')->on('news')
                ->onDelete('cascade');

            $tae -> integer('on_locations') -> unsigned() -> default(0);

             $table->foreign('on_locations')
                ->references('id')->on('locations')
                ->onDelete('cascade');
            */

            $table->string('dir');
            $table->string('filename');
            $table->string('extension');
            $table->integer('size');
            $table->text('attributes');
            $table->dateTime('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('image_files');
    }
}
