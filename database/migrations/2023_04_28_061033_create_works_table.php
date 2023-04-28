<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->date('fecha.in');
            $table->date('fecha.fi');
            $table->text('descripcion');
            $table->foreignId('id_profesionals')->constrained('id_profesionals');
            $table->foreignId('id_companies')->constrained('id_companies');
            $table->foreignId('id_courses')->constrained('id_courses');
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
        Schema::dropIfExists('works');
    }
}
