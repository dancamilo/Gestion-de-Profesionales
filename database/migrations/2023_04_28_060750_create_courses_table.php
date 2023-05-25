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
            $table->string('nombre');
            $table->char('duracion');
            $table->char('asistentes');
            $table->text('valor');
            $table->text('descripcion');
            $table->text('observaciones');
            $table->date('fecha_inicial');
            $table->date('fecha_final');
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
