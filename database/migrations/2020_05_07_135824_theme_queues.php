<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ThemeQueues extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('theme_queues', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_name');
            $table->string('theme_name');
            $table->string('theme_category');
            $table->string('theme_price');
            $table->string('theme_discription');
            $table->string('theme_image');
            $table->string('theme_file');
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
        //
    }
}
