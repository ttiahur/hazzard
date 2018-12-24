<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');           
            $table->integer('status');           
            $table->integer('current_point');
            $table->timestamp('added_on')->nullable();
            $table->timestamp('ready_on')->nullable();
            $table->timestamp('closed_on')->nullable();
            $table->timestamp('realased_on')->nullable();
            $table->integer('users');
            $table->integer('creator_id');
            $table->integer('operator_id');            
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
        Schema::dropIfExists('deals');
    }
}
