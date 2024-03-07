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
        Schema::create('package_page_details', function (Blueprint $table) {
            $table->id();
            $table->integer('package_id');
            $table->string('main_heading');
            $table->longText('sub_heading');
            $table->string('enterprise_title');
            $table->longText('enterprise_details');
            $table->string('includes_heading');
            $table->longText('includes_details');
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
        Schema::dropIfExists('package_page_details');
    }
};
