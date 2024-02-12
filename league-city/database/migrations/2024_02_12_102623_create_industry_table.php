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
        Schema::create('industry', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->text('url_slug')->nullable();
            $table->string('industry_url')->nullable();
            $table->string('heading')->nullable();
            $table->string('sub_heading')->nullable();
            $table->string('industry_image')->nullable();
            $table->longText('description')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('industry');
    }
};
