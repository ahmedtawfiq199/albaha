<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_information', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
			$table->string('project_specialization');
            $table->string('project_specialization_other');
			$table->string('nature_project');
            $table->string('nature_project_other');
            $table->string('project_format');
            $table->string('project_format_other');
			$table->text('competitive_advantages');
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
        Schema::dropIfExists('project_information');
    }
}
