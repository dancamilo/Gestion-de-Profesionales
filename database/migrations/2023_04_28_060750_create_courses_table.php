<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('term');
            $table->foreignId('id_areas')->constrained('areas');
            $table->text('details');
            $table->text('observations');
            $table->date('startDate');
            $table->date('endDate');
            $table->foreignId('id_profesionals')->constrained('profesionals');
            $table->foreignId('id_companies')->constrained('companies');
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
        Schema::dropIfExists('courses');
    }
}
