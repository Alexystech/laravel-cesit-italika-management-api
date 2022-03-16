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
            $table->id('folio');
            $table->decimal('cost', 5, 2);

            $table->biginteger('fk_type_of_work')->unsigned();
            $table->foreign('fk_type_of_work')
                ->references('folio')
                ->on('type_of_works')
                ->onDelete('cascade');

            $table->bigInteger('fk_mechanic')->unsigned();
            $table->foreign('fk_mechanic')
                ->references('folio')
                ->on('mechanics')
                ->onDelete('cascade');

            $table->string('fk_vehicle', 7);
            $table->foreign('fk_vehicle')
                ->references('plaque')
                ->on('vehicles')
                ->onDelete('cascade');

            $table->bigInteger('fk_client')->unsigned();
            $table->foreign('fk_client')
                ->references('folio')
                ->on('clients')
                ->onDelete('cascade');

            $table->dateTime('date_received');
            $table->dateTime('date_sended');
            $table->text('issues');
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
