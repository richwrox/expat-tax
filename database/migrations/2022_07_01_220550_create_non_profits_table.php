<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNonProfitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('non_profits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('filing_years_id')->nullable();
            $table->string('name')->nullable();
            $table->string('ein')->nullable();
            $table->string('address')->nullable();
            $table->string('officer_in_care_detials')->nullable();
            $table->string('first_time_filing')->nullable();
            $table->string('last_filed')->nullable();
            $table->string('initial_1023')->nullable();
            $table->string('irs501c3_letter')->nullable();
            $table->string('articles_of_incorporation')->nullable();
            $table->string('have_balance_sheet')->nullable();
            $table->string('2019_2020_profit_loss_report')->nullable();
            $table->string('2019_2020_balance_sheet')->nullable();
            $table->string('list_of_donors')->nullable();
            $table->string('is_registered_charity')->nullable();
            $table->string('state')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

            $table->foreign('filing_years_id')
            ->references('id')
            ->on('filing_years')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('non_profits');
    }
}
