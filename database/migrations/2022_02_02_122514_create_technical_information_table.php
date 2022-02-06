<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechnicalInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technical_information', function (Blueprint $table) {
            $table->id();
            $table->string('customer_number');
            $table->string('products_size');
            $table->string('services_number');
            $table->string('project_place');
            $table->string('project_place_natuer');
            $table->string('project_place_natuer_other');
            $table->string('justifications_choosing_project');
            $table->string('production_style');
            $table->string('production_systems');
            $table->string('equipment_source');
            $table->string('raw_materials');
            $table->foreignId('order_id')->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('technical_information');
    }
}
