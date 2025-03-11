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
        Schema::create('portfolio', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string("url_slug")->nullable();
            $table->string("project_url")->nullable();
            $table->string("heading")->nullable();
            $table->string("sub_heading")->nullable();
            $table->string("logo")->nullable();
            $table->string("image")->nullable();
            $table->string("banner")->nullable();
            $table->longText('desc_heading')->nullable();
            $table->longText('description')->nullable();
            $table->tinyInteger("status")->default(1);
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
        Schema::dropIfExists('portfolio');
    }
};
