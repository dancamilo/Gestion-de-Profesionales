<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_contacts')->constrained('contacts');
            $table->string('nameCmp');   
            $table->string('bussName');
            $table->string('country');
            $table->string('location');
            $table->string('address'); 
            $table->string('RUT');
            $table->string('NIT'); 
            $table->BigInteger('check');
            $table->string('ecoActivity');
            $table->Integer('employees');
            $table->string('compSize');
            $table->string('phoneCmp')->nullable();
            $table->string('emailCmp');
            $table->string('webPage');
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
        Schema::dropIfExists('companies');
    }
}
