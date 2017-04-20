<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     * @table transactions
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->date('tgl_booking')->nullable();
            $table->date('tgl_sewa')->nullable();
            $table->string('waktu', 45)->nullable();
            $table->integer('status')->nullable();
            $table->double('harga')->nullable()->comment('	');
            $table->double('dp')->nullable();
            $table->integer('customer_id');
            $table->integer('building_id');

            /*
            $table->foreign('building_id')
      				->references('id')->on('buildings');
            $table->foreign('customer_id')
        			->references('id')->on('customers');
            */
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
       Schema::dropIfExists('transactions');
     }
}
