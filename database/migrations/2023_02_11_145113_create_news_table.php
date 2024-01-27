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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('sub_title')->nullable();
            $table->string('title_en')->nullable();
            $table->text('sub_title_en')->nullable();
            $table->text('image')->nullable();
            $table->longText('detail')->nullable();
            $table->longText('detail_en')->nullable();
            $table->integer('status')->default('0');
            $table->integer('type')->default('0');
            $table->integer('status_2')->default('0');
            $table->integer('view')->default('0');
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
        Schema::dropIfExists('news');
    }
};
