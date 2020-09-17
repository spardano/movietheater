<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('payment_id');
            $table->date('payment_date');
            $table->integer('qty');
            $table->integer('ticket_number')->unsigned();
            $table->foreign('ticket_number')->references('ticket_number')->on('tickets');
            $table->integer('costumer_id')->unsigned();
            $table->foreign('costumer_id')->references('costumer_id')->on('costumers');
            $table->integer('staff_id')->unsigned();
            $table->foreign('staff_id')->references('staff_id')->on('staff');
            $table->text('payment_desc');
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
        Schema::dropIfExists('payments');
    }
}
