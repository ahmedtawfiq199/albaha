<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_information', function (Blueprint $table) {
            $table->id();
            $table->string('id_number');
			$table->date('date_of_birth');
			$table->text('address');
			$table->string('social_status');
            $table->integer('age');
			$table->string('city')->nullable();
			$table->string('no_civil_registry');
            $table->string('scientific_specialization');
			$table->string('educational_qualification');
            $table->string('hand_graduation');
			$table->string('nationality');
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
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
        Schema::dropIfExists('user_information');
    }
}
