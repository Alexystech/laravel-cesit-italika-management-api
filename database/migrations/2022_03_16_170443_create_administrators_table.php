<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrators', function (Blueprint $table) {
            $table->id('folio');
            $table->string('name', 20);
            $table->string('father_lastname', 20);
            $table->string('mother_lastname', 20);
            $table->string('username', 20)->unique();
            $table->string('email', 50);
            $table->string('password', 50);
            $table->string('cellphone', 10);
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
        Schema::dropIfExists('administrators');
    }
}
