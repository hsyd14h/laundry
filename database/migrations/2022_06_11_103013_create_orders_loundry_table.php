<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersLoundryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_loundry', function (Blueprint $table) {
            $table->id();
            $table->string('code_order');
            $table->unsignedBigInteger('package_id')->nullable();
            $table->string('total_price');
            $table->string('user_name');
            $table->string('user_id')->nullable();
            $table->bigInteger('user_phone');
            $table->string('address');
            $table->date('date_drop_laundry')->nullable();
            $table->date('date_take_laundry')->nullable();
            $table->date('date_finish_laundry')->nullable();
            $table->enum('status',['Dalam Proses','Proses','Finish']);
            $table->timestamps();

            $table->foreign('package_id')->references('id')->on('package')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders_loundry');
    }
}
