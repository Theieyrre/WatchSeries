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
        Schema::create('media_directories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('tags')->default("");
            $table->longText('description')->default("");
            $table->longText('folder_name')->unique();
            $table->integer("score")->default(0);
            $table->integer("episodes")->default(0);
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
        Schema::dropIfExists('media_directories');
    }
};
