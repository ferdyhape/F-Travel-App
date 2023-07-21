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
        Schema::create('travel_companies', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name', 75);
            $table->string('address', 125);
            $table->string('email')->unique();
            $table->string('phone_number', 13)->unique();
            $table->longText('description');
            $table->string('logo')->default('logo/default.png');
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
        Schema::dropIfExists('travel_companies');
    }
};
