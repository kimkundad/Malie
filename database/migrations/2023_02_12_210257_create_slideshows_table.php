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
        Schema::create('slideshows', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('sub_title')->nullable();
            $table->string('title_en')->nullable();
            $table->text('sub_title_en')->nullable();
            $table->text('image')->nullable();
            $table->integer('g_btn')->default('0');
            $table->text('g_btn_text')->nullable();
            $table->text('g_btn_url')->nullable();
            $table->integer('status')->default('0'); 
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
        Schema::dropIfExists('slideshows');
    }
};
