<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFranchiseReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('franchise_report', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('franchise_id');
            $table->date('date');
            $table->json('hour_report');
            $table->integer('total_sold');
            $table->integer('total_revenue');
            $table->timestamps();
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
        Schema::dropIfExists('franchise_report');
    }
}
