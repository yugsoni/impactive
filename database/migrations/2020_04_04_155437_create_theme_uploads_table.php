<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThemeUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('theme_uploads', function (Blueprint $table) {
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
        Schema::dropIfExists('theme_uploads');
    }
}
