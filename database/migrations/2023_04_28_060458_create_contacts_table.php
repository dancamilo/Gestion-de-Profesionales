<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
<<<<<<< Updated upstream:database/migrations/2023_04_28_060458_create_contacts_table.php
            $table->string('telephone');
=======
            $table->string('docIdentity');
            $table->string('appointment');
            $table->BigInteger('telephone');
            $table->BigInteger('cellular');
>>>>>>> Stashed changes:database/migrations/2023_04_28_060743_create_contacts_table.php
            $table->string('email');
            $table->text('area');
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
        Schema::dropIfExists('contacts');
    }
}
