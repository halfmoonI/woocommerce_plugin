<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSegmentsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('segments', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uid');
            $table->integer('mail_list_id')->unsigned();
            $table->string('name');
            $table->string('matching');

            $table->timestamps();

            // foreign
            $table->foreign('mail_list_id')->references('id')->on('mail_lists')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('segments');
    }
}
