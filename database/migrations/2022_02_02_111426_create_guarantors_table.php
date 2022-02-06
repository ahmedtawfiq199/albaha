<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuarantorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guarantors', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
			$table->string('id_number');
			$table->date('date_of_birth');
			$table->text('address_place');
			$table->string('employer');
			$table->string('employer_name');
			$table->text('employer_address');
			$table->string('career');
			$table->double('salary');
            $table->foreignId('contact_detail_id')->nullable()->constrained('contact_details')->nullOnDelete();
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
        Schema::dropIfExists('guarantors');
    }
}
