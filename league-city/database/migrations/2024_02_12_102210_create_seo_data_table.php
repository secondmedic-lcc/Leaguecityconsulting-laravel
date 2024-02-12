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
        Schema::create('seo_data', function (Blueprint $table) {
            $table->id();
            $table->string('page_name')->nullable();
            $table->text('page_link')->nullable();
            $table->string('canonical')->nullable();
            $table->integer('service_id')->nullable();
            $table->longText('meta_title')->nullable();
            $table->longText('meta_key')->nullable();
            $table->longText('meta_description')->nullable();
            $table->string('meta_image')->nullable();
            $table->longText('meta_schema')->nullable();
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
        Schema::dropIfExists('seo_data');
    }
};
