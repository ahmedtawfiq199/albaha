<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('market_information', function (Blueprint $table) {
            $table->id();
            $table->string('customer_natuer');
            $table->string('customer_natuer_other');
            $table->string('customer_number');
            $table->text('customer_description');
            $table->string('expected_order_size');
            $table->string('number_of_direct_competitors');
            $table->text('information_about_competitors');
            $table->string('comper_with_competitors');
            $table->text('comper_with_competitors_description');
            $table->string('comper_price_with_competitors');
            $table->string('comper_price_with_competitors_other');
            $table->string('distribution_channel');
            $table->string('distribution_channel_other');
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
        Schema::dropIfExists('market_information');
    }
}
