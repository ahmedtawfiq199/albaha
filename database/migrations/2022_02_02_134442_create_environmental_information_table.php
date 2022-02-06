<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnvironmentalInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('environmental_information', function (Blueprint $table) {
            $table->id();
            $table->string('carbon_waste');
            $table->string('carbon_waste_other');
            $table->string('harmful_waste');
            $table->string('harmful_waste_other');
            $table->text('nature_waste_generated');
            $table->foreignId('order_id')->constrained('orders')->cascadeOnDelete();
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
        Schema::dropIfExists('environmental_information');
    }
}
