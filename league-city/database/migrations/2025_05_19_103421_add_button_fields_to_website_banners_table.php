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
        Schema::table('website_banners', function (Blueprint $table) {
            $table->string("button_text")->nullable();
            $table->string("button_url")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('website_banners', function (Blueprint $table) {
            $table->dropColumn("button_text");
            $table->dropColumn("button_url");
        });
    }
};
