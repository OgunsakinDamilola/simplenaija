<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyRentalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_rentals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('property_id');
            $table->integer('user_id');
            $table->integer('pricing_id');
            $table->integer('active_status');
            $table->integer('payment_status');
            $table->string('rental_date');
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
        Schema::dropIfExists('property_rentals');
    }
}
