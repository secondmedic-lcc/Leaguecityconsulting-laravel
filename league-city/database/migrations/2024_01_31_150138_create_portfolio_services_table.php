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
        Schema::create('portfolio_services', function (Blueprint $table) {
            $table->id();
            $table->integer("portfolio_id")->nullable();
            $table->longText('service_icon')->nullable();
            $table->longText('service_title')->nullable();
            $table->longText('service_details')->nullable();
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
        Schema::dropIfExists('portfolio_services');
    }
};
