<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShippingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shippings', function (Blueprint $table) {
            $table->increments('id');
            $table->text('message')->nullable();
            $table->string('customerName');
            $table->string('customerPhone');
            $table->date('date');
            $table->string('address');
            $table->string('addressOptional')->nullable();
            $table->string('city');
            $table->string('country');
            $table->string('province');
            $table->string('postalCode');
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
        Schema::dropIfExists('shippings');
    }
}
