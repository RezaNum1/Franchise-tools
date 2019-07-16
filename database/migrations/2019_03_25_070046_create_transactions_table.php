<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('date_time');
            $table->unsignedInteger('fp_id')->comment('franchise product');
            $table->unsignedInteger('franchise_id')->comment('franchise product');
            $table->integer('count');
            $table->integer('total');
            $table->text('description')->nullable();
            $table->timestamps();
            $table->foreign('fp_id')->references('id')->on('franchise_product');
            $table->foreign('franchise_id')->references('id')->on('franchise');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
