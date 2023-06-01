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
<<<<<<< Updated upstream:database/migrations/2023_04_28_055544_create_companies_table.php
            $table->string('name');   
            $table->string('address'); 
=======
            $table->string('name');
            $table->foreignId('id_contacts')->constrained('contacts');
            $table->string('bussName');
            $table->string('country');
            $table->string('location');
            $table->string('address');
            $table->string('NIT');
>>>>>>> Stashed changes:database/migrations/2023_04_28_060748_create_companies_table.php
            $table->string('RUT');
            $table->string('telephone');
            $table->string('email');
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
