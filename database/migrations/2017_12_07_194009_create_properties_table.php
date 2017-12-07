<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->longText('description');
            $table->integer('state_id');
            $table->integer('local_government_id');
            $table->integer('owner_id');
            $table->integer('agent_id');
            $table->integer('category_id');
            $table->integer('type_id');
            $table->longText('amenities');
            $table->integer('class_id');
            $table->longText('nearby_attractions');
            $table->bigInteger('total_amount');
            $table->integer('pricing_id');
            $table->longText('rules');
            $table->integer('available_status');
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
        Schema::dropIfExists('properties');
    }
}
