<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
           $table->increments('id');
            $table->string('original_name');
            $table->string('save_name');
            $table->string('save_path');
            $table->string('extension');
            $table->string('mime');
            $table->integer('size');
            $table->string('md5');
            $table->string('sha1');
            $table->boolean('location');
            $table->timestamps();
            $table->text('url', 65535)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('files');
    }
}
