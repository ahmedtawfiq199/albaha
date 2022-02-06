<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachments', function (Blueprint $table) {
            $table->id();
            $table->string('id_image')->nullable();
            $table->string('national_address')->nullable();
            $table->string('bank_account')->nullable();
            $table->string('academic_certificate_image')->nullable();
            $table->string('cv')->nullable();
            $table->string('user_training_certificate')->nullable();
            $table->string('guarantor_id_image')->nullable();
            $table->string('guarantor_national_address')->nullable();
            $table->string('supporting_document')->nullable();
            $table->string('another_file')->nullable();
            $table->foreignId('order_id')->nullable()->constrained('orders')->nullOnDelete();
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
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
        Schema::dropIfExists('attachments');
    }
}
