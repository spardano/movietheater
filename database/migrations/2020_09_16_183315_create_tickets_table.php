<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('ticket_number');
            $table->integer('show_id')->unsigned();
            $table->foreign('show_id')->references('show_id')->on('shows');
            $table->integer('ticket_type')->unsigned();
            $table->foreign('ticket_type')->references('ticket_type_id')->on('tickets_type');
            $table->integer('seat')->unsigned();
            $table->foreign('seat')->references('seat_id')->on('seats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
