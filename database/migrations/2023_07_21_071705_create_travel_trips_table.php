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
        Schema::create('travel_trips', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('departure_city', 50);
            $table->string('destination_city', 50);
            $table->date('departure_date');
            $table->decimal('price', 10, 2);
            $table->integer('seat')->default(0);
            $table->string('image_trip')->default('trip/default.png');
            $table->foreignUuid('travel_company_id')->constrained('travel_companies')->onDelete('cascade');
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
        Schema::dropIfExists('travel_trips');
    }
};
