<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('explore_sections', function (Blueprint $table) {
            $table->id();
            $table->string('heading');
            $table->text('description');
            $table->string('button_text')->nullable();
            $table->string('button_url')->nullable();
            $table->enum('position', ['left', 'right']);
            $table->boolean('status')->default(1); 
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
        Schema::dropIfExists('explore_sections');
    }
};
