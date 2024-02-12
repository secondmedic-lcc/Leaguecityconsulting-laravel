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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id(); 
            $table->text('blog_title')->nullable();
            $table->string("url_slug")->nullable();
            $table->longText('blog_details')->nullable();
            $table->longText('description')->nullable();
            $table->string('read_time')->nullable();
            $table->string('blog_image')->nullable();
            $table->string('detail_image')->nullable();
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
        Schema::dropIfExists('blogs');
    }
};
